<?php
	class Admin_mod extends CI_Model
	{
		public function fee_ins($data)
		{
			$this->db->insert("ifeesetup",$data);
		}

		public function feeselmod(){

			$q=$this->db->get("ifeesetup");
			$rs=$q->result();
			return $rs;
		}


		public function feedelmod($id){
         
         $this->db->where("fee_id",$id);
		 $this->db->delete('ifeesetup');

		}


		public function feeeditmod($id){
            $this->db->where("fee_id",$id);
			$q=$this->db->get("ifeesetup");
			$rs=$q->row();
			return $rs;

		}

		public function feeupdmod($w,$id){

         $this->db->where("fee_id",$id);
		 $this->db->update("ifeesetup",$w);


		}


		public function studentadmission_mod($w){
        
			$this->db->insert("student_admission",$w);


		}

		public function getpicup(){
			$q=$this->db->get("ifeesetup");
			$rs=$q->result();
			return $rs;
		}



         public function selectadmissionmod(){

			$q=$this->db->select("student_admission.*,ifeesetup.pickup_point as pic,ifeesetup.busfee")->from("student_admission")->join("ifeesetup","ifeesetup.fee_id=student_admission.pickup_point")->get();
			$rs=$q->result();
			return $rs;


		 }

		 public function deleteadmissionmod($id){

	       $this->db->where("sid",$id);
           $q=$this->db->get("student_admission");
            $rs=$q->result();

            foreach($rs as $r){
            unlink("./student_images/".$r->student_image);
             }

            $this->db->where("sid",$id);
		    $this->db->delete('student_admission');

		   }

		   public function editadmissionmod($id){

            $this->db->where("sid",$id);
			$q=$this->db->get("student_admission");
			$rs=$q->row();
			return $rs;

		   }


		   public function updadmission($w,$id){

			$this->db->where("sid",$id);
			$this->db->update("student_admission",$w);
   
   
		   }

		   public function insbusfeereceiptsmod($w){

              $this->db->insert("fee_receipts",$w);


		   }


		   public function amount($id){

			$q=$this->db->select("student_admission.*,ifeesetup.pickup_point as pic,ifeesetup.busfee")->from("student_admission")->join("ifeesetup","ifeesetup.fee_id=student_admission.pickup_point")->where("student_admission.sid",$id)->get();
			$rs=$q->row();
			return $rs;
		

		   }


		   public function listbusfeereceipt(){

			$q=$this->db->select("student_admission.*,ifeesetup.pickup_point as pic,ifeesetup.busfee, fee_receipts.*")->from("fee_receipts")->join("student_admission","fee_receipts.student_nid=student_admission.sid")->join("ifeesetup","ifeesetup.fee_id=student_admission.pickup_point")->order_by("receipt_id","desc")->get();
			$rs=$q->result();
			return $rs;


		 }

		 public function printreceiptmod($id){
             
			$q=$this->db->select("student_admission.*,ifeesetup.pickup_point as pic,ifeesetup.busfee, fee_receipts.*")->from("fee_receipts")->join("student_admission","fee_receipts.student_nid=student_admission.sid")->join("ifeesetup","ifeesetup.fee_id=student_admission.pickup_point")->where("fee_receipts.receipt_id",$id)->get();
			$rs=$q->row();
			return $rs;




		 }


		 public function pendingfeesmod(){

			$td=date("Y-m-d");
           
			$this->db->where("s_to > '$td'");
			$q=$this->db->get("fee_receipts");
			$rs=$q->result();
			$paid=array();
			foreach($rs as $r){

				$paid[]=$r->student_nid;

			}

             if(count($rs)>0){
			$q=$this->db->select("student_admission.*,ifeesetup.pickup_point as pic,ifeesetup.busfee")->from("student_admission")->join("ifeesetup","ifeesetup.fee_id=student_admission.pickup_point")->where_not_in("student_admission.sid",$paid)->get();
			$rs=$q->result();
			 }else{
				$q=$this->db->select("student_admission.*,ifeesetup.pickup_point as pic,ifeesetup.busfee")->from("student_admission")->join("ifeesetup","ifeesetup.fee_id=student_admission.pickup_point")->get();
				$rs=$q->result();
			 }
		return $rs;

         

		 }

		public function busreceivedajaxmod($sid){

			$q=$this->db->select("student_admission.*,ifeesetup.pickup_point as pic,ifeesetup.busfee")->from("student_admission")->join("ifeesetup","ifeesetup.fee_id=student_admission.pickup_point")->where("sid",$sid)->get();
			$rs=$q->row();
			return $rs;


		}

		public function insfundtransfermod($f_from ,$f_to){

           $this->db->where("s_from >= '$f_from'");
		   $this->db->where("s_from <= '$f_to'");
		   $q=$this->db->get("fee_receipts");
		   $rs=$q->result();
		   return $rs;


		}


		public function fundtransferdatamod($w){
           
			$this->db->insert('fund_transfer',$w);


		}


		public function fundtransfertablemod(){
			$this->db->order_by("f_id", "asc");
			$q=$this->db->get("fund_transfer");
			$rs=$q->result();
			return $rs;
		}
  

		public function inspettycashmod($w){


			$this->db->insert('pettycash',$w);
		}


	}

?>