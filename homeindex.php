<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'nwmsystem');

    if(isset($_POST['update']))
    {   
        $jobregister_id = $_POST['jobregister_id'];
        $technician_rank = $_POST['technician_rank'];
        $staff_position = $_POST['staff_position'];
        $job_priority = $_POST['job_priority'];
        $job_order_number = $_POST['job_order_number'];
        $job_name = $_POST['job_name'];
        $job_description = $_POST['job_description'];
        $requested_date = $_POST['requested_date'];
        $delivery_date = $_POST['delivery_date'];
        $customer_name = $_POST['customer_name'];
        $customer_grade = $_POST['customer_grade'];
        $cust_address1 = $_POST['cust_address1'];
        $cust_address2 = $_POST['cust_address2'];
        $cust_address3 = $_POST['cust_address3'];
        $customer_PIC = $_POST['customer_PIC'];
        $cust_phone1 = $_POST['cust_phone1'];
        $cust_phone2 = $_POST['cust_phone2'];
        $machine_name = $_POST['machine_name'];
        $machine_type = $_POST['machine_type'];
        $machine_brand = $_POST['machine_brand'];
        $accessories_required = $_POST['accessories_required'];
        $job_assign = $_POST['job_assign'];
        $Job_assistant = $_POST['Job_assistant'];
        $job_cancel = $_POST['job_cancel'];
        $job_status = $_POST['job_status'];
        $jobregisterlastmodify_by  = $_POST['jobregisterlastmodify_by'];

        $query = "UPDATE job_register SET
                        
job_priority='$job_priority',
technician_rank='$technician_rank',
staff_position='$staff_position',
job_order_number='$job_order_number',
job_name='$job_name',
job_description='$job_description',
requested_date='$requested_date',
delivery_date='$delivery_date',
customer_name='$customer_name',
customer_grade='$customer_grade',
cust_address1='$cust_address1',
cust_address2='$cust_address2',
cust_address3='$cust_address3',
customer_PIC='$customer_PIC',
cust_phone1='$cust_phone1',
cust_phone2='$cust_phone2',
machine_name='$machine_name',
machine_type='$machine_type',
machine_brand='$machine_brand',
accessories_required='$accessories_required',
job_assign ='$job_assign',
Job_assistant ='$Job_assistant',
job_cancel ='$job_cancel',
job_status ='$job_status',
jobregisterlastmodify_by ='$jobregisterlastmodify_by'

WHERE jobregister_id='$jobregister_id'";

 $query_run = mysqli_query($connection, $query);

        {

                        if ($query_run) {
                            echo '<script> alert("Data Updated"); </script>';
                            header("location:Adminhomepage.php");
                        } else {
                            echo '<script> alert("Data Not Updated"); </script>';
                        }
                    }
    }
             ?>