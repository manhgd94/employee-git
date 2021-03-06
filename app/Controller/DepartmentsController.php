<?php
App::uses('AppController', 'Controller');
/**
 * Departments Controller
 *
 * @property Department $Department
 * @property PaginatorComponent $Paginator
 */
class DepartmentsController extends AppController {	
public function beforeFilter(){
	parent::beforeFilter();
	$this->Auth->allow('index', 'view');
}
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Department->recursive = 0;
		$this->set('departments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Department->exists($id)) {
			throw new NotFoundException(__('Invalid department'));
		}
		$options = array('conditions' => array('Department.' . $this->Department->primaryKey => $id));
		$this->set('department', $this->Department->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Department->create();
			if ($this->Department->save($this->request->data)) {
				$this->Flash->success(__('The department has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The department could not be saved. Please, try again.'));
			}
		}
		$employees = $this->Department->Employee->find('list');
		$this->set(compact('employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Department->exists($id)) {
			throw new NotFoundException(__('Invalid department'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Department->save($this->request->data)) {
				$this->Flash->success(__('The department has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The department could not be saved. Please, try again.'));
			}
		} else {
			$this->loadmodel('Employee');
			$this->set('options', $this->Employee->find('list'));
			$options = array('conditions' => array('Department.' . $this->Department->primaryKey => $id));
			$manager = $this->Department->find('first', $options);
			$this->set('manager',$manager['Department']['employee_id']);
			$this->request->data = $this->Department->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Department->id = $id;
		if (!$this->Department->exists()) {
			throw new NotFoundException(__('Invalid department'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Department->delete()) {
			$this->Flash->success(__('The department has been deleted.'));
		} else {
			$this->Flash->error(__('The department could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
