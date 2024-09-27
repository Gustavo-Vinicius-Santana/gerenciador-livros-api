<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    protected $userService;
    protected $userRepository;

    public function __construct(UserService $userService, UserRepository $userRepository)
    {
        $this->userService = $userService;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return response()->json($this->userService->getAllUsers());
    }

    public function show($id)
    {
        $user = $this->userService->getUserById($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $userToUpdate = $this->userRepository->findById($id);

        if (is_null($userToUpdate)) {
            return $this->responseError('Usuário não encontrado para atualização', 404);
        }

        if (Gate::denies('manage-profile', $userToUpdate)) {
            return response()->json(['message' => 'Você não tem permissão para atualizar este perfil'], 403);
        }

        $updatedUser = $this->userService->updateUser($id, $request->all());

        return response()->json(['message' => 'Usuário atualizado com sucesso']);
    }

    public function destroy($id)
    {
        $userToDelete = $this->userRepository->findById($id);

        if (is_null($userToDelete)) {
            return $this->responseError('Usuário não encontrado para atualização', 404);
        }

        if (Gate::denies('manage-profile', $userToDelete)) {
            return response()->json(['message' => 'Você não tem permissão para deletar este perfil'], 403);
        }

        $this->userService->deleteUser($id);

        return response()->json(['message' => 'Usuário deletado com sucesso']);
    }

    public function showWithDetails()
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'os detalhes desse usuário não existe'], 404);
        }

        if (Gate::denies('manage-profile', $user)) {
            return response()->json(['message' => 'Você não tem permissão para ver os detralhes desse perfil'], 403);
        }

        return response()->json($user);
    }
}