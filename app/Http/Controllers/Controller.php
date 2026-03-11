<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

#[OA\Info(
    title: "Learn Swagger API",
    version: "1.0.0",
    description: "Dokumentasi API pertama saya dengan PHP Attributes"
)]
#[OA\Server(
    url: "http://localhost:8000",
    description: "Local Server"
)]
#[OA\SecurityScheme(
    securityScheme: "bearerAuth",
    type: "http",
    name: "Authorization",
    in: "header",
    scheme: "bearer",
    bearerFormat: "JWT"
)]
abstract class Controller
{
    //
}