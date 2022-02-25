<?php

class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->database();
		$this->load->model("Admin_mod");
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function setup()
	{
		$this->load->view("feesetup");
	}

	public function feeinc()
	{
		$n=$this->input->post("pickup_point");
		$f=$this->input->post("busfee");

		$w=array('pickup_point'=>$n, 'busfee'=>$f);
		$this->Admin_mod->fee_ins($w);

		redirect(base_url().'feesetup');
	}


	public function feesel()
	{
		$res=$this->Admin_mod->feeselmod();
		$w=array(
         
			'row'=>$res

		);
        $this->load->view('feeselect',$w);

	}

	public function feedel($id){

		$this->Admin_mod->feedelmod($id);

		redirect(base_url().'feedel');
	}

	public function feeedit($id){

      $res=$this->Admin_mod->feeeditmod($id);

	  $w=array(
        'r'=>$res

	  );
	  $this->load->view("feeedit",$w);

	}

	public function feeupd(){


		$n=$this->input->post("pickup_point");
		$f=$this->input->post("busfee");
		$id=$this->input->post("fee_id");

		$w=array('pickup_point'=>$n, 'busfee'=>$f);
		$this->Admin_mod->feeupdmod($w,$id);

		redirect(base_url().'feeselect');
           
    
	}

	public function showfeereceipt(){


		$res=$this->Admin_mod->listbusfeereceipt();
         
		$w=array(

			"row"=>$res,
		);

		$this->load->view('showfeereceipt',$w);



	}

	// print//

	public function printreceipt($id){
		$res=$this->Admin_mod->printreceiptmod($id);
                  $w=array(
					'r'=>$res
				  );

		$this->load->view('printreceipt',$w);

	}




      //student admission//





	public function studentadmission(){

		$res=$this->Admin_mod->getpicup();
		$w=array(
   'pickup'=>$res

		);

        $this->load->view("admission",$w);


	}

	public function insertadmission(){

       $si=$this->input->post('student_id');
	   $sn=$this->input->post('student_name');
	   $fname=$this->input->post('father_name');
	   $mn=$this->input->post('mother_name');
	   $add=$this->input->post('address');
	   $mo=$this->input->post('mobile_no');
	   $adh=$this->input->post('adhaar');
	   $gn=$this->input->post('gender');
	   $dob=$this->input->post('dob');
	   $pp=$this->input->post('pickup_point');
	   $conf=array(

		'upload_path'=>'./student_images',
		'allowed_types'=>'jpg|png|jpeg',
		'max_size'=>2000
	);

	$this->load->library('upload',$conf);
	if(!$this->upload->do_upload('student_image')){

       echo $this->upload->display_errors();

	}
	else{

       $fd=$this->upload->data();
	   $fn=$fd['file_name'];

	   $w=array(
        
        "student_id"=>$si,
		"student_name"=>$sn,
		"father_name"=>$fname,
		"mother_name"=>$mn,
		"address"=>$add,
		"mobile_no"=>$mo,
		"adhaar"=>$adh,
		"gender"=>$gn,
        "dob"=>$dob,
		"pickup_point"=>$pp,
		"student_image"=>$fn,
	   );

	   $this->Admin_mod->studentadmission_mod($w);

	}

	}

     public function selectadmission(){
      
		$res=$this->Admin_mod->selectadmissionmod();
		$w=array(
         
			'row'=>$res

		);
        $this->load->view('selectadmission',$w);
	 }


	 public function deleteadmission($id){

		$this->Admin_mod->deleteadmissionmod($id);

		redirect(base_url().'selectadmission');

	  }

	  public function editadmissionfn($id){

		$res=$this->Admin_mod->editadmissionmod($id);

		$resp=$this->Admin_mod->getpicup();
		
		
		$w=array(
			"r"=>$res,
			'pickup'=>$resp
		);
		
		$this->load->view('editadmission',$w);
		
		
		
		}

		public function updadmission(){
            
			$si=$this->input->post('student_id');
			$sn=$this->input->post('student_name');
			$fname=$this->input->post('father_name');
			$mn=$this->input->post('mother_name');
			$add=$this->input->post('address');
			$mo=$this->input->post('mobile_no');
			$adh=$this->input->post('adhaar');
			$gn=$this->input->post('gender');
			$dob=$this->input->post('dob');
			$pp=$this->input->post('pickup_point');
			$id=$this->input->post('sid');

			$conf=array(
	 
			 'upload_path'=>'./student_images',
			 'allowed_types'=>'jpg|png|jpeg',
			 'max_size'=>2000
		 );
	 
		 $this->load->library('upload',$conf);
		 if(!$this->upload->do_upload('student_image')){

			$w=array(
			 
				"student_id"=>$si,
				"student_name"=>$sn,
				"father_name"=>$fname,
				"mother_name"=>$mn,
				"address"=>$add,
				"mobile_no"=>$mo,
				"adhaar"=>$adh,
				"gender"=>$gn,
				"dob"=>$dob,
				"pickup_point"=>$pp,
				
			   );
	 
			
		 }
		 else{
	 
			$fd=$this->upload->data();
			$fn=$fd['file_name'];
	 
			$w=array(
			 
			 "student_id"=>$si,
			 "student_name"=>$sn,
			 "father_name"=>$fname,
			 "mother_name"=>$mn,
			 "address"=>$add,
			 "mobile_no"=>$mo,
			 "adhaar"=>$adh,
			 "gender"=>$gn,
			 "dob"=>$dob,
			 "pickup_point"=>$pp,
			 "student_image"=>$fn,
			);
		} 

		$this->Admin_mod->updadmission($w,$id);

		redirect(base_url().'selectadmission');

 }

 public function busfeereceipts(){

$res=$this->Admin_mod->selectadmissionmod();
$w=array(
'std'=>$res

);
 $this->load->view("busfeereceipts",$w);
 }


 public function insbusfeereceipts(){
    
  $snid=$this->input->post('student_nid');
  $sf=$this->input->post('s_from');
  $st=$this->input->post('s_to');
  $pm=$this->input->post('payment');
  $rm=$this->input->post('remarks');


$amount=$this->Admin_mod->amount($snid);


  $w=array(
"student_nid"=>$snid,
"s_from"=>$sf,
"s_to"=>$st,
"payment_type"=>$pm,
"remarks"=>$rm,
'amount'=>$amount->busfee,
'payment_for'=>'monthly fee'
  );

  $this->Admin_mod->insbusfeereceiptsmod($w);

 }


 public function pendingfees(){

      $res=$this->Admin_mod->pendingfeesmod();

	  $w=array(

		'row'=>$res
	  );

	$this->load->view('pendingfees',$w);






 }

 public function busreceivedajax(){

$sid=$this->input->post("sid");

  $res=$this->Admin_mod->busreceivedajaxmod($sid);

echo "<p>Student name: ".$res->student_name."</p>"; 
echo "<p>Student pickup point: ".$res->pic."</p>";
echo "<p>Student Bus fee: ".$res->busfee."/month</p>";
 }





 
}


?>