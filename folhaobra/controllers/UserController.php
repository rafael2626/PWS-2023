<?php
require_once 'models\User.php';
require_once 'controllers\Controller.php';

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $this->renderView('user', 'index', ['user' => $users]);
    }

    public function show($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            $this->renderView('user', 'show', ['users' => $user, 'id' => $id]);
        } else {
            $this->renderView('users', 'show', ['users' => $user]);
        }
    }

    public function create()
    {
        $users = User::all();
        $this->renderView('user', 'create', ['users' => $users]);
    }

    public function store()
    {
        $user = new User($this->getHTTPPost());
        if ($user->is_valid()) {
            $user->save();
            $this->redirectToRoute('user', 'index');
        } else {
            $this->renderView('user', 'create', ['user' => $user]);
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            $this->redirectToRoute('user', 'index');
        } else {
            $this->renderView('user', 'edit', ['user' => $user, 'id' => $id]);
        }
    }

    public function update($id)
    {
        $user = User::find($id);
        $user->update_attributes($this->getHTTPPost());
        if ($user->is_valid()) {
            $user->save();
            $this->redirectToRoute('user', 'index');
        } else {
            $this->renderView('user', 'edit', ['user' => $user]);
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        $this->redirectToRoute('user', 'index');
    }
}