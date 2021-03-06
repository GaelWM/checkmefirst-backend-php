<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $successStatus = 200;
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => (request('password'))])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('check-me-first-backend')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    /**
     * Register api
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(UserRequest $userRequest)
    {
//        $validator = Validator::make($request->all(), [
//            'name' => 'required',
//            'surname' => 'required',
//            'email' => 'required|email|unique:users',
//            'password' => 'required',
//            'c_password' => 'required|same:password',
//        ]);
//        if ($validator->fails()) {
//            return response()->json(['error'=>$validator->errors()], 401);
//        }
        //$input = $request->all();
        //$input['password'] = bcrypt($input['password']);
        $user = User::create(User::userRequest($userRequest));
        $success['token'] =  $user->createToken('check-me-first-backend')->accessToken;
        $success['name'] =  $user->name;
        return response()->json(['success'=>$success], $this->successStatus);
    }
    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }


    public function index()
    {
        return UserResource::collection(User::latest()->get());
    }

    public function store(UserRequest $userRequest)
    {
        $user = (new User())->create(User::userRequest($userRequest));
        return response()->json(new UserResource($user), 201);
    }


    /**
     * @param User $user
     * @return UserResource
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }


    /**
     * @param UserRequest $userRequest
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UserRequest $userRequest, User $user)
    {
        $user->update(User::userRequest($userRequest));
        return response()->json(new UserResource($user), 201);
    }


    /**
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(["User deleted"], 204);
    }


}
