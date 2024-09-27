<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepository->getAll();
    }

    public function getUserById($id)
    {
        $user = $this->userRepository->findById($id);

        if (!$user) {
            return ['message' => 'esse usuario não existe'];
        }

        return $user->only(['name']);
    }

    public function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->userRepository->create($data);
    }

    public function updateUser($id, array $data)
    {
        $user = $this->getUserById($id);

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        return $this->userRepository->update($user, $data);
    }

    public function deleteUser($id)
    {
        $user = $this->getUserById($id);
        return $this->userRepository->delete($user);
    }

    public function getUserDetailsById($id)
    {
        $user = $this->userRepository->findById($id);

        if (!$user) {
            return ['message' => 'Esse usuário não existe'];
        }

        return $user->only(['id', 'name', 'email']);
    }
}