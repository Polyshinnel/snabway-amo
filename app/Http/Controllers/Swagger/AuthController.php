<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Post(
 *      path="/api/auth/login",
 *      summary="Авторизация",
 *      tags={"Auth"},
 *
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="email", type="string", example="example@example.com"),
 *                      @OA\Property(property="password", type="string", example="Password"),
 *                  )
 *              }
 *          )
 *      ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="Получаем JWT token",
 *          @OA\JsonContent(
 *              @OA\Property(property="access_token", type="string", example="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9"),
 *              @OA\Property(property="token_type", type="string", example="bearer"),
 *              @OA\Property(property="expires_in", type="integer", example=3600),
 *          )
 *      )
 * )
 *
 *
 * @OA\Post(
 *      path="/api/auth/logout",
 *      summary="Выход",
 *      tags={"Auth"},
 *      security={{ "bearerAuth": {} }},
 *
 *      @OA\Response(
 *          response=200,
 *          description="Получаем JWT token",
 *          @OA\JsonContent(
 *              @OA\Property(property="message", type="string", example="Successfully logged out"),
 *          )
 *      )
 * )
 *
 * @OA\Post(
 *      path="/api/auth/me",
 *      summary="Данные пользователя",
 *      tags={"Auth"},
 *      security={{ "bearerAuth": {} }},
 *
 *      @OA\Response(
 *          response=200,
 *          description="Сведения пользователя",
 *          @OA\JsonContent(
 *              @OA\Property(property="id", type="string", example="1"),
 *              @OA\Property(property="name", type="string", example="John Doe"),
 *              @OA\Property(property="email", type="string", example="example@example.com"),
 *          )
 *      )
 * )
 */

class AuthController extends Controller
{

}
