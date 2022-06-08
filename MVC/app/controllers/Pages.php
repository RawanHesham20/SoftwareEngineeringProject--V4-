<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function reservation()
    {

           $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $registerModel->setName(trim($_POST['name']));
            $registerModel->setMeetingDate(trim($_POST['date']));
             $registerModel->setMeetingTime(trim($_POST['time']));
            $registerModel->setEventType(trim($_POST['eventtype'])); 
             $registerModel->setNumber(trim($_POST['number']));   
             $registerModel->setEmail(trim($_POST['email']));        
            $registerModel->Add();
                    redirect('pages/index');

        }
        $viewPath = VIEWS_PATH . 'pages/Reservation.php';
        require_once $viewPath;
        $reservationView = new Reservation($this->getModel(), $this);
        $reservationView->output();
    }

        public function AddAdmin()
    {

           $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $registerModel->setName(trim($_POST['name']));
            $registerModel->setPassword(trim($_POST['password']));  
             $registerModel->setEmail(trim($_POST['email']));        
            $registerModel->Add();
                    redirect('pages/adminPage');

        }
        $viewPath = VIEWS_PATH . 'pages/AddAdmin.php';
        require_once $viewPath;
        $newadminView = new AddAdmin($this->getModel(), $this);
        $newadminView->output();
    }

    public function DeleteSupplier($workerId)
    {
                
        $registerModel = $this->getModel();
     
       $registerModel->Delete($workerId);
            

        $viewPath = VIEWS_PATH . 'pages/DeleteSupplier.php';
        require_once $viewPath;
        $DeleteWorkerView = new DeleteSupplier($this->getModel(), $this);
        $DeleteWorkerView->output();
    }
    public function DeleteAdmin($workerId)
    {
                
        $registerModel = $this->getModel();
     
       $registerModel->Delete($workerId);
            

        $viewPath = VIEWS_PATH . 'pages/DeleteAdmin.php';
        require_once $viewPath;
        $DeleteWorkerView = new DeleteAdmin($this->getModel(), $this);
        $DeleteWorkerView->output();
    }


    public function feedback()
    {
            $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $registerModel->setName(trim($_POST['name']));
            $registerModel->setemail(trim($_POST['email']));
            $registerModel->setEventType(trim($_POST['eventtype']));
            $registerModel->setExperience(trim($_POST['experience']));    
            $registerModel->setOrganization(trim($_POST['organization'])); 
            $registerModel->setTeamMembers(trim($_POST['teammembers']));         
            $registerModel->Add();
                    redirect('pages/index');

        }
        $viewPath = VIEWS_PATH . 'pages/feedback.php';
        require_once $viewPath;
        $feedbackView = new feedback($this->getModel(), $this);
        $feedbackView->output();
    }

        public function gallery()
    {
        $viewPath = VIEWS_PATH . 'pages/Gallery.php';
        require_once $viewPath;
        $galleryView = new Gallery($this->getModel(), $this);
        $galleryView->output();
    }
    
       public function eventdetails()
    {
       $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $registerModel->setSupplier(trim($_POST['supplier']));
            $registerModel->setDate(trim($_POST['date']));
            $registerModel->setStartTime(trim($_POST['starttime']));
            $registerModel->setEndTime(trim($_POST['endtime']));
            $registerModel->setEventType(trim($_POST['eventtype']));
            $registerModel->setLocation(trim($_POST['location']));
            $registerModel->setClient(trim($_POST['client']));
            $registerModel->setGuestsNumber(trim($_POST['guestsnumber']));  
            $registerModel->setRequirements(trim($_POST['requirements']));            
            $registerModel->Add();
                    redirect('pages/adminPage');

        } 

        $viewPath = VIEWS_PATH . 'pages/EventDetails.php';
        require_once $viewPath;
        $eventdetailsView = new EventDetails($this->getModel(), $this);
        $eventdetailsView->output();
    }

    public function info()
    {
        $viewPath = VIEWS_PATH . 'pages/info.php';
        require_once $viewPath;
        $infoView = new info($this->getModel(), $this);
        $infoView->output();
    }

        public function ViewSuppliers()
    {
        $viewPath = VIEWS_PATH . 'pages/ViewSuppliers.php';
        require_once $viewPath;
        $Suppliersview = new ViewSuppliers($this->getModel(), $this);
        $Suppliersview->output();
    }

    public function AddWorker()
    {
                $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $registerModel->setName(trim($_POST['name']));
            $registerModel->setDepartment(trim($_POST['department']));
            $registerModel->setNumber(trim($_POST['number']));          
            $registerModel->Add();
                    redirect('pages/info');

        }
        $viewPath = VIEWS_PATH . 'pages/AddWorker.php';
        require_once $viewPath;
        $AddWorkerView = new AddWorker($this->getModel(), $this);
        $AddWorkerView->output();
    }

    function getWorkerById( $workerId , $worker) {
        foreach ($worker as $x){
            if($x->id == $workerId)
                return $x;
        }
    }

    function getAdminById( $workerId , $worker) {
        foreach ($worker as $x){
            if($x->id == $workerId)
                return $x;
        }
    }
    
    public function DeleteWorker($workerId)
    {
                
        $registerModel = $this->getModel();
     
       $registerModel->Delete($workerId);
            

        $viewPath = VIEWS_PATH . 'pages/DeleteWorker.php';
        require_once $viewPath;
        $DeleteWorkerView = new DeleteWorker($this->getModel(), $this);
        $DeleteWorkerView->output();
    }

    public function EditWorker($workerId)
    {      $workerModel = $this->loadModel('infoModel');
               
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $oldWorker = $workerModel->getWorkerById($workerId )[0];
            $editModel = $this->getModel();
            
            
            $editModel->setName(trim($_POST['Name']));
            $editModel->setDepartment(trim($_POST['Department']));
            $editModel->setNumber(trim($_POST['PhoneNumber']));          
            $editModel->Edit($workerId);
                   redirect('pages/info');

        }
        $this->worker = $workerModel->getWorkerById($workerId)[0];

        $viewPath = VIEWS_PATH . 'pages/EditWorker.php';
        require_once $viewPath;
        $EditWorkerView = new EditWorker($this->getModel(), $this);
        $EditWorkerView->output();
    }
        public function AddSuppliers()
    {
                $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $registerModel->setName(trim($_POST['name']));
            $registerModel->setEmail(trim($_POST['email']));
            $registerModel->setNumber(trim($_POST['number'])); 
            $registerModel->setSupplies(trim($_POST['supplies']));         
            $registerModel->Add();
                    redirect('pages/ViewSuppliers');

        }
        $viewPath = VIEWS_PATH . 'pages/AddSuppliers.php';
        require_once $viewPath;
        $AddSupplierView = new AddSuppliers($this->getModel(), $this);
        $AddSupplierView->output();
    }


    public function adminPage()
    {
        $viewPath = VIEWS_PATH . 'pages/adminPage.php';
        require_once $viewPath;
        $infoView = new adminPage($this->getModel(), $this);
        $infoView->output();
    }

    public function AddUpcomingEvents()
    {

           $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $picture = $_FILES['picture']['name'];
            $picture_tmp = $_FILES['picture']['tmp_name'];

             move_uploaded_file($picture_tmp,"C:\Users\Rawan\Desktop\1111\htdocs\MVC\public\images".$picture);

            $registerModel->setTitle(trim($_POST['title1']));
            $registerModel->setDate(trim($_POST['date']));
             $registerModel->setTime(trim($_POST['time']));
            $registerModel->setLocation(trim($_POST['location'])); 
            $registerModel->setPicture($_FILES["picture"]['name']);        
            $registerModel->Add();
                    redirect('pages/adminPage');

        }
        $viewPath = VIEWS_PATH . 'pages/AddUpcomingEvents.php';
        require_once $viewPath;
        $upcomingeventsView = new AddUpcomingEvents($this->getModel(), $this);
        $upcomingeventsView->output();
    }
    public function schedule()
    {
        $viewPath = VIEWS_PATH . 'pages/schedule.php';
        require_once $viewPath;
        $Suppliersview = new schedule($this->getModel(), $this);
        $Suppliersview->output();
    }

}
