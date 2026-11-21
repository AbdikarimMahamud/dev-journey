<?php
declare(strict_types=1);

// A tiny router showing how frameworks map URLs to code.
class Router
{
    private array $routes = [];

    public function get(string $pattern, callable $handler): void
    {
        $this->routes['GET'][$pattern] = $handler;
    }

    public function dispatch(string $method, string $path): string
    {
        foreach ($this->routes[$method] ?? [] as $pattern => $handler) {
            // Turn /users/{id} into a regex
            $regex = '#^' . preg_replace('#\{(\w+)\}#', '(?<$1>[^/]+)', $pattern) . '$#';
            if (preg_match($regex, $path, $matches)) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                return $handler(...$params);
            }
        }
        return "404 Not Found";
    }
}

$router = new Router();
$router->get('/', fn() => "Home page");
$router->get('/users/{id}', fn(string $id) => "User #$id");
$router->get('/posts/{slug}', fn(string $slug) => "Post: $slug");

foreach (['/', '/users/42', '/posts/hello-php', '/missing'] as $path) {
    echo str_pad($path, 20) . $router->dispatch('GET', $path) . PHP_EOL;
}
