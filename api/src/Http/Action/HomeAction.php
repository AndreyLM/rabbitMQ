<?php

declare( strict_types=1);

namespace Api\Http\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class HomeAction implements RequestHandlerInterface
{

	/**
	 * Handles a request and produces a response.
	 *
	 * May call other collaborating code to generate the response.
	 * @param ServerRequestInterface $request
	 * @return ResponseInterface
	 */
	public function handle(ServerRequestInterface $request): ResponseInterface
	{
		return new JsonResponse([
			'name' => 'App API',
			'version' => '1.0',
		]);
	}
}