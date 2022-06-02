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

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/About.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
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

    public function feedback()
    {
            $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $registerModel->setname(trim($_POST['name']));
            $registerModel->setemail(trim($_POST['email']));
            $registerModel->setfeedback(trim($_POST['feedback']));
            $registerModel->setrating(trim($_POST['rating']));            
            $registerModel->Add();
                    redirect('pages/index');

        }
        $viewPath = VIEWS_PATH . 'pages/feedback.php';
        require_once $viewPath;
        $feedbackView = new feedback($this->getModel(), $this);
        $feedbackView->output();
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

    public function EditWorker($id)
    {


      $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $registerModel->setName(trim($_POST['name']));
            $registerModel->setDepartment(trim($_POST['department']));
            $registerModel->setNumber(trim($_POST['number']));
            $registerModel->Edit();
                    redirect('pages/info');

        }

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
   public function info()
    {
        $viewPath = VIEWS_PATH . 'pages/info.php';
        require_once $viewPath;
        $infoView = new info($this->getModel(), $this);
        $infoView->output();
    }


}
