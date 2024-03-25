<?php

class MyCont extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}

// create Account-------------------------------------------

	public function createAcc()
	{
		if($this->input->get('submit'))
	  {
	     $p=$this->input->get('p'); 
		 $n=$this->input->get('n');
		 $f=$this->input->get('fn');
		 $e=$this->input->get('e');
		 $pho=$this->input->get('ph');
		 $g=$this->input->get('g');
		 $c=$this->input->get('c');
		 $st=$this->input->get('st');
		 $ci=$this->input->get('ct');
		 $am=$this->input->get('amt');
		 $this->load->model('MyModel');
		 $rs=$this->MyModel->getAccount();
		//  print_r($rs);
		$x=sizeof($rs);
		$ac="PNB";
		if($x>0)
		{
		$x=$x+112;
	    $ac=$ac.$x;
	     }
		 else
		 $ac="PNB112";

           $dt=array("acno"=>$ac,"Pin"=>$p,"Name"=>$n,"Father"=>$f,"Email"=>$e,"Phone"=>$pho,"Gender"=>$g,"Country"=>$c,"State"=>$st,"City"=>$ci,"Amount"=>$am);
		 $this->MyModel->cAccount($dt);
		 $s=array("msg"=>"Account created Successfully with Account number = $ac ");
	       $this->load->view('createAcc',$s);
	  }
	  else{
		$s=array("msg"=>"");
		$this->load->view('createAcc',$s);
	  }
    }
		
	// withdraw----------------------------------------------------
	public function withdrawl()
 {
		if($this->input->get('submit'))
    {
	    
		 $ac=$this->input->get('ac');
		 $pin=$this->input->get('pi'); 
		 $aw=$this->input->get('aw');

        $cn=array("acno"=>$ac,"pin"=>$pin);
        $this->load->model('MyModel');
		$rs=$this->MyModel->checkAccount($cn);
		if(sizeof($rs)>0)
		{
			$camt=$rs[0]["Amount"];
			if($camt>=$aw)
			{
				$camt=$camt-$aw;
				$con=array("acno"=>$ac);
				$dt=array("Amount"=>$camt);
				$this->MyModel->updateAccount($con,$dt);
				$s=array("msg"=>"After wihtdraw $aw Your Current balacne is =  $camt");
				$this->load->view('withdrawl',$s);

			}
			else
			{
				$s=array("msg"=>"Insufficient blaance");
				$this->load->view('withdrawl',$s);
 
			}

		}
		else
		{
				$s=array("msg"=>"Invalid Account or Pin");
			   $this->load->view('withdrawl',$s);

		}
	}
             else
                  {
	                  $s=array("msg"=>"");
                     $this->load->view('withdrawl',$s);

                    }
 }

//  Deposite------------------------------------------------------ 

   public function deposite()
	{
		if($this->input->get('submit')){
            $ac=$this->input->get('ac');	
            $pi=$this->input->get('pi');	
            $ad=$this->input->get('ad');

			$cn=array('acno'=>$ac,'pin'=>$pi);
			$this->load->model('mymodel');
			$rs=$this->mymodel->checkAccount($cn);
			if(sizeof($rs)>0)
            {
				$camt=$rs[0]['Amount'];
			  
			  if($camt>=$ad)
			  {
                 $camt=$camt+$ad;
				 $con=array('acno'=>$ac);
				 $dt=array('Amount'=>$camt);
				 $this->mymodel->updateAccount($con,$dt);
				 $s=array('msg'=>"After Deposite $ad your Current balance is = $camt");
				 $this->load->view('deposite',$s);
			  }
			  else{
				$s=array('msg'=>"Insufficient Balance");
				$this->load->view('deposite',$s);
			  }
			}
			else
			{
				$s=array('msg'=>"Invialed Account or Pin");
				$this->load->view('deposite',$s);
			}
		}
		else
		{
			$s=array('msg'=>"");
			$this->load->view('deposite',$s);

		}



		
	}
	
	// Fundtransfer===========================================

	public function fundtransfer()
	{
		if($this->input->get('submit')){
            $ac=$this->input->get('ac');	
            $pi=$this->input->get('pi');	
            $acnot=$this->input->get('acnot');
            $at=$this->input->get('at');
            

			$cn=array('acno'=>$ac,'pin'=>$pi);
			$this->load->model('mymodel');
			$rs=$this->mymodel->checkAccount($cn);
			if(sizeof($rs)>0)
            {
				$camt=$rs[0]['Amount'];
			  
			  if($camt>=$at)
			  {
				 $check=array('acno'=>$acnot);
				 $rs=$this->MyModel->checkAccount($check);
				if(sizeof($rs)>0)
				{
				 $tamt=$rs[0]["Amount"];
                 $camt=$camt-$at;
                 $tamt=$camt+$at;
				 $con=array('acno'=>$ac);
				 $dt=array('Amount'=>$tamt);
				 $this->MyModel->updateAccount($con,$dt);
				 $s=array('msg'=>"After Fundtransfer $at Your Current balance is =  $camt");
				 $this->load->view('fundtransfer',$s);
				}
				else{
					$s=array('msg'=>"Invalid Banificary Account");
				    $this->load->view('fundtransfer',$s);
				}


			 }
	       }
		
			       else
			        {
				       $s=array('msg'=>"Insuficient Balance");
				       $this->load->view('fundtransfer',$s);
			        }
				}
	
		             else
		                   {
			                $s=array('msg'=>"");
			                $this->load->view('fundtransfer',$s);

		                    }
	}
	
// pin change ===========================================================================

	public function pinchange()
	{

		if($this->input->get("submit"))
		{
			$ac=$this->input->get('ac');
			$op=$this->input->get('op');
			$np=$this->input->get('np');
			$cn=array('acno'=>$ac,'Pin'=>$op);
			$this->load->model('mymodel');
			$rs=$this->mymodel->pinChange($cn);
			// print_r($rs);
			if(sizeof($rs)>0)
		      {
				// $newpin=$rs[0]['Pin'];
				

				$con=array('acno'=>$ac);
				$dt=array('Pin'=>$np);
				$this->mymodel->updatePin($con,$dt);
				$s=array('msg'=>"Pin Change Successfully");
				$this->load->view('pinchange',$s);
				}
			  
			  else{
				$s=array('msg'=>"invalid Account Or Pin" );
				$this->load->view('pinchange',$s);
			  }
		}
		else
		{
			$s=array('msg'=>"");
			$this->load->view('pinchange',$s);

		}
	

	}

// Balance Enq================================================

	public function balanceEnq()
	
	{
		if($this->input->get("submit"))
		{
			$ac=$this->input->get('ac');
			$pi=$this->input->get('pi');
			$cn=array('acno'=>$ac,'Pin'=>$pi);
			$this->load->model('MyModel');
			$rs=$this->MyModel->checkBalance($cn);
			// print_r($rs);
			if(sizeof($rs)>0){
				$camt=$rs[0]['Amount'];
				if($camt>=0){
				$con=array('acno'=>$ac);
				$dt=array('Pin'=>$pi);
				$this->MyModel->showBalance($con,$dt);
				$s=array('msg'=>" Your Current Account balance is = $camt ");
				$this->load->view('balanceEnq',$s);
				}
				else{
					$s=array('msg'=>"Invalid Account or pin");
					$this->load->view('balanceEnq',$s);
		 }
		 
	   }
	//    $s=array('msg'=>"");
	// 	$this->load->view('balanceEnq',$s);

		}
		
	}



	public function accountsummery()
	{
		$this->load->view('accountsummery');
	}

	
	












}

?>