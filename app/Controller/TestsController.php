<?
	class TestsController extends AppController {

		public function index()
		{
			$maVar2 = array('Account' => array('id' => '0', 'name' => 'Trouduc de l\'OCA', 'password' => 'dfdgsdgsdgfsdgvxcbfsdg'));
			$this->set(compact('maVar2'));
			$this->set('maVar', 'Hello World');
		}

		public function add() {
			$this->set(array('varAdd' => 'Heelo add'));
		}
	}

?>