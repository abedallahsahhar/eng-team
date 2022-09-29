<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main_ctr extends CI_Controller
{

    function __construct()
    {

        parent::__construct();

        if ($this->session->userdata('CARDID') == '') {
            redirect('main_login/login');

        }
    }

//---------------------------------------------------------------------------------//
    public function index()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('welcome_page', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function emp_reward()
    {
        $data = array('tittle' => "المكافئات");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('emp_reward', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function empcompany()
    {
        $data = array('tittle' => " مجريات الشركة");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('empcompany', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function search_TIMEEMPE()
    {
        $data = array('tittle' => "  بحث الحضور");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('search_TIMEEMPE', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function tasks_emp()
    {
        $data = array('tittle' => "المهام");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('tasks_emp', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function all_timeemp()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('all_timeemp', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function empoutboos()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('empoutboos', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function search_HOLIDAY()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('search_HOLIDAY', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function search_OUTTIME()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('search_OUTTIME', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function search_TASK()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('search_TASK', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function search_REWARDS()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('search_REWARDS', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function apex()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('apex', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function emptaskg()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('emptaskg', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function empoholedayboos()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('empoholedayboos', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function alltaskboss()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('alltaskboss', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function emp_active()
    {
        $data = array('tittle' => "الحسابات");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);
        $data['content'] = $this->load->view('emp_active', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    /*-----------------------------------------شاشات الفاتورة--------------------------------------------------------*/
    public function main()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('main', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function search()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('search', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    /*---------------------------------------------------------------------------------------------------------------*/
    /*-----------------------------------------شاشات المخازن--------------------------------------------------------*/

    public function emp1()
    {
        if (isset($_GET['CARDID'])) {

            $data = array('tittle' => "اضافة موظف");
            $data['CARDID'] = $_GET['CARDID'];
            $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
            $data['header'] = $this->load->view('templates/header', NULL, true);
            $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

            $data['content'] = $this->load->view('emp1', $data, true);
            $data['footer'] = $this->load->view('templates/footer', NULL, true);
            $data['scripts'] = $this->load->view('templates/scripts', $data, true);
            $this->template->load('default', null, $data);
        } else {
            $data = array('tittle' => "اضافة موظف");
            $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
            $data['header'] = $this->load->view('templates/header', NULL, true);
            $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

            $data['content'] = $this->load->view('emp1', $data, true);
            $data['footer'] = $this->load->view('templates/footer', NULL, true);
            $data['scripts'] = $this->load->view('templates/scripts', $data, true);
            $this->template->load('default', null, $data);
        }

    }

    public function emp2()
    {
        $data = array('tittle' => " مجريات الشركة");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('emp2', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }


    public function emp3()
    {
        $data = array('tittle' => "ادرج الصور");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('emp3', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function emp31()
    {
        $data = array('tittle' => "الإجازات");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('emp31', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }


    public function emp4()
    {
        $data = array('tittle' => "الحضور");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('emp4', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    /*---------------------------------------------------------------------------------------------------------------*/
    public function emp5()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('emp5', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function emp6()
    {
        $data = array('tittle' => "الموظفين");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('emp6', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function emp7()
    {
        $data = array('tittle' => "الاعدادات");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('emp7', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function emp61()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('emp61', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function emp62()
    {
        $data = array('tittle' => "المكافئات");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('emp62', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function emp51()
    {
        $data = array('tittle' => "المهام");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('emp51', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function empp()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('empp', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function empp1()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('empp1', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function empa()
    {
        $data = array('tittle' => "متابعة الموظفين");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('empa', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function login()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('login', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function employee()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('employee', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }

    public function emp_outtime()
    {
        $data = array('tittle' => "الأذونات");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('Boos/emp_outtime', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);


    }


    public function emp_outim()
    {
        $data = array('tittle' => "الأذونات");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('emp_outim', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
    public function welcome_page()
    {
        $data = array('tittle' => "test1");
        $data['headhtml'] = $this->load->view('templates/headhtml', $data, true);
        $data['header'] = $this->load->view('templates/header', NULL, true);
        $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

        $data['content'] = $this->load->view('welcome_page', $data, true);
        $data['footer'] = $this->load->view('templates/footer', NULL, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->template->load('default', null, $data);
    }
}
/* End of file welcome.php */
