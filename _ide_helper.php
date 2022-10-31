<?php
// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 9.37.0.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

    namespace App\Facades { 
            /**
     * 
     *
     */ 
        class RequestHelperFacade {
                    /**
         * 
         *
         * @static 
         */ 
        public static function get($url, $query = null)
        {
                        /** @var \App\Helpers\RequestHelper $instance */
                        return $instance->get($url, $query);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function post($url, $data = [])
        {
                        /** @var \App\Helpers\RequestHelper $instance */
                        return $instance->post($url, $data);
        }
         
    }
     
}

    namespace Illuminate\Support\Facades { 
            /**
     * 
     *
     * @method static mixed filterFiles(mixed $files)
     * @see \Illuminate\Http\Request
     */ 
        class Request {
                    /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */ 
        public static function capture()
        {
                        return \Illuminate\Http\Request::capture();
        }
                    /**
         * Return the Request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function instance()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->instance();
        }
                    /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */ 
        public static function method()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->method();
        }
                    /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */ 
        public static function root()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->root();
        }
                    /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function url()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->url();
        }
                    /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function fullUrl()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrl();
        }
                    /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         * @return string 
         * @static 
         */ 
        public static function fullUrlWithQuery($query)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrlWithQuery($query);
        }
                    /**
         * Get the full URL for the request without the given query string parameters.
         *
         * @param array|string $keys
         * @return string 
         * @static 
         */ 
        public static function fullUrlWithoutQuery($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrlWithoutQuery($keys);
        }
                    /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function path()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->path();
        }
                    /**
         * Get the current decoded path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function decodedPath()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->decodedPath();
        }
                    /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */ 
        public static function segment($index, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->segment($index, $default);
        }
                    /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */ 
        public static function segments()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->segments();
        }
                    /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function is(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->is(...$patterns);
        }
                    /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function routeIs(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->routeIs(...$patterns);
        }
                    /**
         * Determine if the current request URL and query string match a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function fullUrlIs(...$patterns)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fullUrlIs(...$patterns);
        }
                    /**
         * Get the host name.
         *
         * @return string 
         * @static 
         */ 
        public static function host()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->host();
        }
                    /**
         * Get the HTTP host being requested.
         *
         * @return string 
         * @static 
         */ 
        public static function httpHost()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->httpHost();
        }
                    /**
         * Get the scheme and HTTP host.
         *
         * @return string 
         * @static 
         */ 
        public static function schemeAndHttpHost()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->schemeAndHttpHost();
        }
                    /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function ajax()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ajax();
        }
                    /**
         * Determine if the request is the result of a PJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function pjax()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->pjax();
        }
                    /**
         * Determine if the request is the result of a prefetch call.
         *
         * @return bool 
         * @static 
         */ 
        public static function prefetch()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->prefetch();
        }
                    /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */ 
        public static function secure()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->secure();
        }
                    /**
         * Get the client IP address.
         *
         * @return string|null 
         * @static 
         */ 
        public static function ip()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ip();
        }
                    /**
         * Get the client IP addresses.
         *
         * @return array 
         * @static 
         */ 
        public static function ips()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->ips();
        }
                    /**
         * Get the client user agent.
         *
         * @return string|null 
         * @static 
         */ 
        public static function userAgent()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->userAgent();
        }
                    /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function merge($input)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->merge($input);
        }
                    /**
         * Merge new input into the request's input, but only when that key is missing from the request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function mergeIfMissing($input)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->mergeIfMissing($input);
        }
                    /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function replace($input)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->replace($input);
        }
                    /**
         * This method belongs to Symfony HttpFoundation and is not usually needed when using Laravel.
         * 
         * Instead, you may use the "input" method.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * Get the JSON payload for the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\ParameterBag|mixed 
         * @static 
         */ 
        public static function json($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->json($key, $default);
        }
                    /**
         * Create a new request instance from the given Laravel request.
         *
         * @param \Illuminate\Http\Request $from
         * @param \Illuminate\Http\Request|null $to
         * @return static 
         * @static 
         */ 
        public static function createFrom($from, $to = null)
        {
                        return \Illuminate\Http\Request::createFrom($from, $to);
        }
                    /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return static 
         * @static 
         */ 
        public static function createFromBase($request)
        {
                        return \Illuminate\Http\Request::createFromBase($request);
        }
                    /**
         * Clones a request and overrides some of its parameters.
         *
         * @return static 
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @static 
         */ 
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
                    /**
         * Whether the request contains a Session object.
         * 
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @param bool $skipIfUninitialized When true, ignores factories injected by `setSessionFactory`
         * @static 
         */ 
        public static function hasSession($skipIfUninitialized = false)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasSession($skipIfUninitialized);
        }
                    /**
         * Gets the Session.
         *
         * @throws SessionNotFoundException When session is not set properly
         * @static 
         */ 
        public static function getSession()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getSession();
        }
                    /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Contracts\Session\Session 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function session()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->session();
        }
                    /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return void 
         * @static 
         */ 
        public static function setLaravelSession($session)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->setLaravelSession($session);
        }
                    /**
         * Set the locale for the request instance.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setRequestLocale($locale)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->setRequestLocale($locale);
        }
                    /**
         * Set the default locale for the request instance.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setDefaultRequestLocale($locale)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->setDefaultRequestLocale($locale);
        }
                    /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @return mixed 
         * @static 
         */ 
        public static function user($guard = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->user($guard);
        }
                    /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @param mixed $default
         * @return \Illuminate\Routing\Route|object|string|null 
         * @static 
         */ 
        public static function route($param = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->route($param, $default);
        }
                    /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function fingerprint()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->fingerprint();
        }
                    /**
         * Set the JSON payload for the request.
         *
         * @param \Symfony\Component\HttpFoundation\ParameterBag $json
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setJson($json)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setJson($json);
        }
                    /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getUserResolver()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUserResolver();
        }
                    /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setUserResolver($callback)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setUserResolver($callback);
        }
                    /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getRouteResolver()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRouteResolver();
        }
                    /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setRouteResolver($callback)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setRouteResolver($callback);
        }
                    /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */ 
        public static function toArray()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->toArray();
        }
                    /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->offsetExists($offset);
        }
                    /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->offsetGet($offset);
        }
                    /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($offset, $value)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->offsetSet($offset, $value);
        }
                    /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($offset)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->offsetUnset($offset);
        }
                    /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource|null $content The raw body data
         * @static 
         */ 
        public static function initialize($query = [], $request = [], $attributes = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
                    /**
         * Creates a new request with values from PHP's super globals.
         *
         * @static 
         */ 
        public static function createFromGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::createFromGlobals();
        }
                    /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string|resource|null $content The raw body data
         * @static 
         */ 
        public static function create($uri, $method = 'GET', $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
                    /**
         * Sets a callable able to create a Request instance.
         * 
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @static 
         */ 
        public static function setFactory($callable)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setFactory($callable);
        }
                    /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static 
         */ 
        public static function overrideGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->overrideGlobals();
        }
                    /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies, the string 'REMOTE_ADDR' will be replaced with $_SERVER['REMOTE_ADDR']
         * @param int $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
         * @static 
         */ 
        public static function setTrustedProxies($proxies, $trustedHeaderSet)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setTrustedProxies($proxies, $trustedHeaderSet);
        }
                    /**
         * Gets the list of trusted proxies.
         *
         * @static 
         */ 
        public static function getTrustedProxies()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedProxies();
        }
                    /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static 
         */ 
        public static function getTrustedHeaderSet()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedHeaderSet();
        }
                    /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static 
         */ 
        public static function setTrustedHosts($hostPatterns)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
                    /**
         * Gets the list of trusted host patterns.
         *
         * @static 
         */ 
        public static function getTrustedHosts()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getTrustedHosts();
        }
                    /**
         * Normalizes a query string.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @static 
         */ 
        public static function normalizeQueryString($qs)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
                    /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static 
         */ 
        public static function enableHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
                    /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @static 
         */ 
        public static function getHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
                    /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @static 
         */ 
        public static function hasPreviousSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasPreviousSession();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setSession($session)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setSession($session);
        }
                    /**
         * 
         *
         * @internal 
         * @param \Symfony\Component\HttpFoundation\callable():  SessionInterface $factory
         * @static 
         */ 
        public static function setSessionFactory($factory)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setSessionFactory($factory);
        }
                    /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @see getClientIp()
         * @static 
         */ 
        public static function getClientIps()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getClientIps();
        }
                    /**
         * Returns the client IP address.
         * 
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @see getClientIps()
         * @see https://wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */ 
        public static function getClientIp()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getClientIp();
        }
                    /**
         * Returns current script name.
         *
         * @static 
         */ 
        public static function getScriptName()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getScriptName();
        }
                    /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getPathInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPathInfo();
        }
                    /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBasePath()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getBasePath();
        }
                    /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBaseUrl()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getBaseUrl();
        }
                    /**
         * Gets the request's scheme.
         *
         * @static 
         */ 
        public static function getScheme()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getScheme();
        }
                    /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         *
         * @return int|string|null Can be a string if fetched from the server bag
         * @static 
         */ 
        public static function getPort()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPort();
        }
                    /**
         * Returns the user.
         *
         * @static 
         */ 
        public static function getUser()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUser();
        }
                    /**
         * Returns the password.
         *
         * @static 
         */ 
        public static function getPassword()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPassword();
        }
                    /**
         * Gets the user info.
         *
         * @return string|null A user name if any and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static 
         */ 
        public static function getUserInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUserInfo();
        }
                    /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @static 
         */ 
        public static function getHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getHttpHost();
        }
                    /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static 
         */ 
        public static function getRequestUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRequestUri();
        }
                    /**
         * Gets the scheme and HTTP host.
         * 
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @static 
         */ 
        public static function getSchemeAndHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getSchemeAndHttpHost();
        }
                    /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @see getQueryString()
         * @static 
         */ 
        public static function getUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUri();
        }
                    /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @static 
         */ 
        public static function getUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getUriForPath($path);
        }
                    /**
         * Returns the path as relative reference from the current Request path.
         * 
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         * 
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @static 
         */ 
        public static function getRelativeUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRelativeUriForPath($path);
        }
                    /**
         * Generates the normalized query string for the Request.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @static 
         */ 
        public static function getQueryString()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getQueryString();
        }
                    /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         *
         * @static 
         */ 
        public static function isSecure()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isSecure();
        }
                    /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         *
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static 
         */ 
        public static function getHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getHost();
        }
                    /**
         * Sets the request method.
         *
         * @static 
         */ 
        public static function setMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setMethod($method);
        }
                    /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @see getRealMethod()
         * @static 
         */ 
        public static function getMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getMethod();
        }
                    /**
         * Gets the "real" request method.
         *
         * @see getMethod()
         * @static 
         */ 
        public static function getRealMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRealMethod();
        }
                    /**
         * Gets the mime type associated with the format.
         *
         * @static 
         */ 
        public static function getMimeType($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getMimeType($format);
        }
                    /**
         * Gets the mime types associated with the format.
         *
         * @static 
         */ 
        public static function getMimeTypes($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        return \Illuminate\Http\Request::getMimeTypes($format);
        }
                    /**
         * Gets the format associated with the mime type.
         *
         * @static 
         */ 
        public static function getFormat($mimeType)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getFormat($mimeType);
        }
                    /**
         * Associates a format with mime types.
         *
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static 
         */ 
        public static function setFormat($format, $mimeTypes)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setFormat($format, $mimeTypes);
        }
                    /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @see getPreferredFormat
         * @static 
         */ 
        public static function getRequestFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getRequestFormat($default);
        }
                    /**
         * Sets the request format.
         *
         * @static 
         */ 
        public static function setRequestFormat($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setRequestFormat($format);
        }
                    /**
         * Gets the format associated with the request.
         *
         * @static 
         */ 
        public static function getContentType()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getContentType();
        }
                    /**
         * Sets the default locale.
         *
         * @static 
         */ 
        public static function setDefaultLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setDefaultLocale($locale);
        }
                    /**
         * Get the default locale.
         *
         * @static 
         */ 
        public static function getDefaultLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getDefaultLocale();
        }
                    /**
         * Sets the locale.
         *
         * @static 
         */ 
        public static function setLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->setLocale($locale);
        }
                    /**
         * Get the locale.
         *
         * @static 
         */ 
        public static function getLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getLocale();
        }
                    /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @static 
         */ 
        public static function isMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethod($method);
        }
                    /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @static 
         */ 
        public static function isMethodSafe()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodSafe();
        }
                    /**
         * Checks whether or not the method is idempotent.
         *
         * @static 
         */ 
        public static function isMethodIdempotent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodIdempotent();
        }
                    /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @static 
         */ 
        public static function isMethodCacheable()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isMethodCacheable();
        }
                    /**
         * Returns the protocol version.
         * 
         * If the application is behind a proxy, the protocol version used in the
         * requests between the client and the proxy and between the proxy and the
         * server might be different. This returns the former (from the "Via" header)
         * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
         * the latter (from the "SERVER_PROTOCOL" server parameter).
         *
         * @static 
         */ 
        public static function getProtocolVersion()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getProtocolVersion();
        }
                    /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource 
         * @static 
         */ 
        public static function getContent($asResource = false)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getContent($asResource);
        }
                    /**
         * Gets the Etags.
         *
         * @static 
         */ 
        public static function getETags()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getETags();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function isNoCache()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isNoCache();
        }
                    /**
         * Gets the preferred format for the response by inspecting, in the following order:
         *   * the request format set using setRequestFormat;
         *   * the values of the Accept HTTP header.
         * 
         * Note that if you use this method, you should send the "Vary: Accept" header
         * in the response to prevent any issues with intermediary HTTP caches.
         *
         * @static 
         */ 
        public static function getPreferredFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPreferredFormat($default);
        }
                    /**
         * Returns the preferred language.
         *
         * @param string[] $locales An array of ordered available locales
         * @static 
         */ 
        public static function getPreferredLanguage($locales = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getPreferredLanguage($locales);
        }
                    /**
         * Gets a list of languages acceptable by the client browser ordered in the user browser preferences.
         *
         * @static 
         */ 
        public static function getLanguages()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getLanguages();
        }
                    /**
         * Gets a list of charsets acceptable by the client browser in preferable order.
         *
         * @static 
         */ 
        public static function getCharsets()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getCharsets();
        }
                    /**
         * Gets a list of encodings acceptable by the client browser in preferable order.
         *
         * @static 
         */ 
        public static function getEncodings()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getEncodings();
        }
                    /**
         * Gets a list of content types acceptable by the client browser in preferable order.
         *
         * @static 
         */ 
        public static function getAcceptableContentTypes()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->getAcceptableContentTypes();
        }
                    /**
         * Returns true if the request is an XMLHttpRequest.
         * 
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @static 
         */ 
        public static function isXmlHttpRequest()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isXmlHttpRequest();
        }
                    /**
         * Checks whether the client browser prefers safe content or not according to RFC8674.
         *
         * @see https://tools.ietf.org/html/rfc8674
         * @static 
         */ 
        public static function preferSafeContent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->preferSafeContent();
        }
                    /**
         * Indicates whether this request originated from a trusted proxy.
         * 
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @static 
         */ 
        public static function isFromTrustedProxy()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request         
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isFromTrustedProxy();
        }
                    /**
         * Filter the given array of rules into an array of rules that are included in precognitive headers.
         *
         * @param array $rules
         * @return array 
         * @static 
         */ 
        public static function filterPrecognitiveRules($rules)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->filterPrecognitiveRules($rules);
        }
                    /**
         * Determine if the request is attempting to be precognitive.
         *
         * @return bool 
         * @static 
         */ 
        public static function isAttemptingPrecognition()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isAttemptingPrecognition();
        }
                    /**
         * Determine if the request is precognitive.
         *
         * @return bool 
         * @static 
         */ 
        public static function isPrecognitive()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isPrecognitive();
        }
                    /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function isJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isJson();
        }
                    /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool 
         * @static 
         */ 
        public static function expectsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->expectsJson();
        }
                    /**
         * Determine if the current request is asking for JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function wantsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->wantsJson();
        }
                    /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool 
         * @static 
         */ 
        public static function accepts($contentTypes)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->accepts($contentTypes);
        }
                    /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null 
         * @static 
         */ 
        public static function prefers($contentTypes)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->prefers($contentTypes);
        }
                    /**
         * Determine if the current request accepts any content type.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsAnyContentType()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->acceptsAnyContentType();
        }
                    /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsJson()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->acceptsJson();
        }
                    /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsHtml()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->acceptsHtml();
        }
                    /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool 
         * @static 
         */ 
        public static function matchesType($actual, $type)
        {
                        return \Illuminate\Http\Request::matchesType($actual, $type);
        }
                    /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function format($default = 'html')
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->format($default);
        }
                    /**
         * Retrieve an old input item.
         *
         * @param string|null $key
         * @param \Illuminate\Database\Eloquent\Model|string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function old($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->old($key, $default);
        }
                    /**
         * Flash the input for the current request to the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flash()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flash();
        }
                    /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashOnly($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flashOnly($keys);
        }
                    /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashExcept($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flashExcept($keys);
        }
                    /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        $instance->flush();
        }
                    /**
         * Retrieve a server variable from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function server($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->server($key, $default);
        }
                    /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasHeader($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasHeader($key);
        }
                    /**
         * Retrieve a header from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function header($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->header($key, $default);
        }
                    /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */ 
        public static function bearerToken()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->bearerToken();
        }
                    /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->exists($key);
        }
                    /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->has($key);
        }
                    /**
         * Determine if the request contains any of the given inputs.
         *
         * @param string|array $keys
         * @return bool 
         * @static 
         */ 
        public static function hasAny($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasAny($keys);
        }
                    /**
         * Apply the callback if the request contains the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         * @return $this|mixed 
         * @static 
         */ 
        public static function whenHas($key, $callback, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->whenHas($key, $callback, $default);
        }
                    /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function filled($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->filled($key);
        }
                    /**
         * Determine if the request contains an empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function isNotFilled($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->isNotFilled($key);
        }
                    /**
         * Determine if the request contains a non-empty value for any of the given inputs.
         *
         * @param string|array $keys
         * @return bool 
         * @static 
         */ 
        public static function anyFilled($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->anyFilled($keys);
        }
                    /**
         * Apply the callback if the request contains a non-empty value for the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         * @return $this|mixed 
         * @static 
         */ 
        public static function whenFilled($key, $callback, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->whenFilled($key, $callback, $default);
        }
                    /**
         * Determine if the request is missing a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function missing($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->missing($key);
        }
                    /**
         * Get the keys for all of the input and files.
         *
         * @return array 
         * @static 
         */ 
        public static function keys()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->keys();
        }
                    /**
         * Get all of the input and files for the request.
         *
         * @param array|mixed|null $keys
         * @return array 
         * @static 
         */ 
        public static function all($keys = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->all($keys);
        }
                    /**
         * Retrieve an input item from the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function input($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->input($key, $default);
        }
                    /**
         * Retrieve input from the request as a Stringable instance.
         *
         * @param string $key
         * @param mixed $default
         * @return \Illuminate\Support\Stringable 
         * @static 
         */ 
        public static function str($key, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->str($key, $default);
        }
                    /**
         * Retrieve input from the request as a Stringable instance.
         *
         * @param string $key
         * @param mixed $default
         * @return \Illuminate\Support\Stringable 
         * @static 
         */ 
        public static function string($key, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->string($key, $default);
        }
                    /**
         * Retrieve input as a boolean value.
         * 
         * Returns true when value is "1", "true", "on", and "yes". Otherwise, returns false.
         *
         * @param string|null $key
         * @param bool $default
         * @return bool 
         * @static 
         */ 
        public static function boolean($key = null, $default = false)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->boolean($key, $default);
        }
                    /**
         * Retrieve input as an integer value.
         *
         * @param string $key
         * @param int $default
         * @return int 
         * @static 
         */ 
        public static function integer($key, $default = 0)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->integer($key, $default);
        }
                    /**
         * Retrieve input as a float value.
         *
         * @param string $key
         * @param float $default
         * @return float 
         * @static 
         */ 
        public static function float($key, $default = 0.0)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->float($key, $default);
        }
                    /**
         * Retrieve input from the request as a Carbon instance.
         *
         * @param string $key
         * @param string|null $format
         * @param string|null $tz
         * @return \Illuminate\Support\Carbon|null 
         * @throws \Carbon\Exceptions\InvalidFormatException
         * @static 
         */ 
        public static function date($key, $format = null, $tz = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->date($key, $format, $tz);
        }
                    /**
         * Retrieve input from the request as an enum.
         *
         * @template TEnum
         * @param string $key
         * @param \Illuminate\Http\class-string<TEnum> $enumClass
         * @return \Illuminate\Http\TEnum|null 
         * @static 
         */ 
        public static function enum($key, $enumClass)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->enum($key, $enumClass);
        }
                    /**
         * Retrieve input from the request as a collection.
         *
         * @param array|string|null $key
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function collect($key = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->collect($key);
        }
                    /**
         * Get a subset containing the provided keys with values from the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function only($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->only($keys);
        }
                    /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function except($keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->except($keys);
        }
                    /**
         * Retrieve a query string item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function query($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->query($key, $default);
        }
                    /**
         * Retrieve a request payload item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function post($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->post($key, $default);
        }
                    /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasCookie($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasCookie($key);
        }
                    /**
         * Retrieve a cookie from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function cookie($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->cookie($key, $default);
        }
                    /**
         * Get an array of all of the files on the request.
         *
         * @return array 
         * @static 
         */ 
        public static function allFiles()
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->allFiles();
        }
                    /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasFile($key)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->hasFile($key);
        }
                    /**
         * Retrieve a file from the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return \Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]|array|null 
         * @static 
         */ 
        public static function file($key = null, $default = null)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->file($key, $default);
        }
                    /**
         * Dump the request items and end the script.
         *
         * @param mixed $keys
         * @return \Illuminate\Http\never 
         * @static 
         */ 
        public static function dd(...$keys)
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->dd(...$keys);
        }
                    /**
         * Dump the items.
         *
         * @param mixed $keys
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function dump($keys = [])
        {
                        /** @var \Illuminate\Http\Request $instance */
                        return $instance->dump($keys);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \Illuminate\Http\Request::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        \Illuminate\Http\Request::mixin($mixin, $replace);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Http\Request::hasMacro($name);
        }
                    /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
                        \Illuminate\Http\Request::flushMacros();
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validate($rules, ...$params)
        {
                        return \Illuminate\Http\Request::validate($rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
                        return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignature($absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignature($absolute);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static 
         */ 
        public static function hasValidRelativeSignature()
        {
                        return \Illuminate\Http\Request::hasValidRelativeSignature();
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Session\SessionManager
     * @see \Illuminate\Session\Store
     */ 
        class Session {
                    /**
         * Determine if requests for the same session should wait for each to finish before executing.
         *
         * @return bool 
         * @static 
         */ 
        public static function shouldBlock()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->shouldBlock();
        }
                    /**
         * Get the name of the cache store / driver that should be used to acquire session locks.
         *
         * @return string|null 
         * @static 
         */ 
        public static function blockDriver()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->blockDriver();
        }
                    /**
         * Get the session configuration.
         *
         * @return array 
         * @static 
         */ 
        public static function getSessionConfig()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->getSessionConfig();
        }
                    /**
         * Get the default session driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * Set the default session driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Session\SessionManager $instance */
                        $instance->setDefaultDriver($name);
        }
                    /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->driver($driver);
        }
                    /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Session\SessionManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */ 
        public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->getDrivers();
        }
                    /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container 
         * @static 
         */ 
        public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->getContainer();
        }
                    /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Session\SessionManager 
         * @static 
         */ 
        public static function setContainer($container)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Session\SessionManager 
         * @static 
         */ 
        public static function forgetDrivers()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Illuminate\Session\SessionManager $instance */
                        return $instance->forgetDrivers();
        }
                    /**
         * Start the session, reading the data from a handler.
         *
         * @return bool 
         * @static 
         */ 
        public static function start()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->start();
        }
                    /**
         * Save the session data to storage.
         *
         * @return void 
         * @static 
         */ 
        public static function save()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->save();
        }
                    /**
         * Age the flash data for the session.
         *
         * @return void 
         * @static 
         */ 
        public static function ageFlashData()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->ageFlashData();
        }
                    /**
         * Get all of the session data.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->all();
        }
                    /**
         * Get a subset of the session data.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function only($keys)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->only($keys);
        }
                    /**
         * Checks if a key exists.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->exists($key);
        }
                    /**
         * Determine if the given key is missing from the session data.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function missing($key)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->missing($key);
        }
                    /**
         * Checks if a key is present and not null.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->has($key);
        }
                    /**
         * Get an item from the session.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->get($key, $default);
        }
                    /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->pull($key, $default);
        }
                    /**
         * Determine if the session contains old input.
         *
         * @param string|null $key
         * @return bool 
         * @static 
         */ 
        public static function hasOldInput($key = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->hasOldInput($key);
        }
                    /**
         * Get the requested item from the flashed input array.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function getOldInput($key = null, $default = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getOldInput($key, $default);
        }
                    /**
         * Replace the given session attributes entirely.
         *
         * @param array $attributes
         * @return void 
         * @static 
         */ 
        public static function replace($attributes)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->replace($attributes);
        }
                    /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function put($key, $value = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->put($key, $value);
        }
                    /**
         * Get an item from the session, or store the default value.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function remember($key, $callback)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->remember($key, $callback);
        }
                    /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function push($key, $value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->push($key, $value);
        }
                    /**
         * Increment the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return mixed 
         * @static 
         */ 
        public static function increment($key, $amount = 1)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->increment($key, $amount);
        }
                    /**
         * Decrement the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return int 
         * @static 
         */ 
        public static function decrement($key, $amount = 1)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->decrement($key, $amount);
        }
                    /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function flash($key, $value = true)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->flash($key, $value);
        }
                    /**
         * Flash a key / value pair to the session for immediate use.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function now($key, $value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->now($key, $value);
        }
                    /**
         * Reflash all of the session flash data.
         *
         * @return void 
         * @static 
         */ 
        public static function reflash()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->reflash();
        }
                    /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function keep($keys = null)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->keep($keys);
        }
                    /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @return void 
         * @static 
         */ 
        public static function flashInput($value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->flashInput($value);
        }
                    /**
         * Remove an item from the session, returning its value.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function remove($key)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->remove($key);
        }
                    /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
         * @return void 
         * @static 
         */ 
        public static function forget($keys)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->forget($keys);
        }
                    /**
         * Remove all of the items from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->flush();
        }
                    /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool 
         * @static 
         */ 
        public static function invalidate()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->invalidate();
        }
                    /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */ 
        public static function regenerate($destroy = false)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->regenerate($destroy);
        }
                    /**
         * Generate a new session ID for the session.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */ 
        public static function migrate($destroy = false)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->migrate($destroy);
        }
                    /**
         * Determine if the session has been started.
         *
         * @return bool 
         * @static 
         */ 
        public static function isStarted()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->isStarted();
        }
                    /**
         * Get the name of the session.
         *
         * @return string 
         * @static 
         */ 
        public static function getName()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getName();
        }
                    /**
         * Set the name of the session.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setName($name)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->setName($name);
        }
                    /**
         * Get the current session ID.
         *
         * @return string 
         * @static 
         */ 
        public static function getId()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getId();
        }
                    /**
         * Set the session ID.
         *
         * @param string $id
         * @return void 
         * @static 
         */ 
        public static function setId($id)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->setId($id);
        }
                    /**
         * Determine if this is a valid session ID.
         *
         * @param string $id
         * @return bool 
         * @static 
         */ 
        public static function isValidId($id)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->isValidId($id);
        }
                    /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function setExists($value)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->setExists($value);
        }
                    /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */ 
        public static function token()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->token();
        }
                    /**
         * Regenerate the CSRF token value.
         *
         * @return void 
         * @static 
         */ 
        public static function regenerateToken()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->regenerateToken();
        }
                    /**
         * Get the previous URL from the session.
         *
         * @return string|null 
         * @static 
         */ 
        public static function previousUrl()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->previousUrl();
        }
                    /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @return void 
         * @static 
         */ 
        public static function setPreviousUrl($url)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->setPreviousUrl($url);
        }
                    /**
         * Specify that the user has confirmed their password.
         *
         * @return void 
         * @static 
         */ 
        public static function passwordConfirmed()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->passwordConfirmed();
        }
                    /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface 
         * @static 
         */ 
        public static function getHandler()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->getHandler();
        }
                    /**
         * Determine if the session handler needs a request.
         *
         * @return bool 
         * @static 
         */ 
        public static function handlerNeedsRequest()
        {
                        /** @var \Illuminate\Session\Store $instance */
                        return $instance->handlerNeedsRequest();
        }
                    /**
         * Set the request on the handler instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */ 
        public static function setRequestOnHandler($request)
        {
                        /** @var \Illuminate\Session\Store $instance */
                        $instance->setRequestOnHandler($request);
        }
         
    }
            /**
     * 
     *
     * @see \Illuminate\Translation\Translator
     */ 
        class Lang {
                    /**
         * Determine if a translation exists for a given locale.
         *
         * @param string $key
         * @param string|null $locale
         * @return bool 
         * @static 
         */ 
        public static function hasForLocale($key, $locale = null)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->hasForLocale($key, $locale);
        }
                    /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string|null $locale
         * @param bool $fallback
         * @return bool 
         * @static 
         */ 
        public static function has($key, $locale = null, $fallback = true)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->has($key, $locale, $fallback);
        }
                    /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string|null $locale
         * @param bool $fallback
         * @return string|array 
         * @static 
         */ 
        public static function get($key, $replace = [], $locale = null, $fallback = true)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->get($key, $replace, $locale, $fallback);
        }
                    /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param \Countable|int|array $number
         * @param array $replace
         * @param string|null $locale
         * @return string 
         * @static 
         */ 
        public static function choice($key, $number, $replace = [], $locale = null)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->choice($key, $number, $replace, $locale);
        }
                    /**
         * Add translation lines to the given locale.
         *
         * @param array $lines
         * @param string $locale
         * @param string $namespace
         * @return void 
         * @static 
         */ 
        public static function addLines($lines, $locale, $namespace = '*')
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        $instance->addLines($lines, $locale, $namespace);
        }
                    /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function load($namespace, $group, $locale)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        $instance->load($namespace, $group, $locale);
        }
                    /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void 
         * @static 
         */ 
        public static function addNamespace($namespace, $hint)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        $instance->addNamespace($namespace, $hint);
        }
                    /**
         * Add a new JSON path to the loader.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function addJsonPath($path)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        $instance->addJsonPath($path);
        }
                    /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */ 
        public static function parseKey($key)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->parseKey($key);
        }
                    /**
         * Specify a callback that should be invoked to determined the applicable locale array.
         *
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function determineLocalesUsing($callback)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        $instance->determineLocalesUsing($callback);
        }
                    /**
         * Get the message selector instance.
         *
         * @return \Illuminate\Translation\MessageSelector 
         * @static 
         */ 
        public static function getSelector()
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->getSelector();
        }
                    /**
         * Set the message selector instance.
         *
         * @param \Illuminate\Translation\MessageSelector $selector
         * @return void 
         * @static 
         */ 
        public static function setSelector($selector)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        $instance->setSelector($selector);
        }
                    /**
         * Get the language line loader implementation.
         *
         * @return \Illuminate\Contracts\Translation\Loader 
         * @static 
         */ 
        public static function getLoader()
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->getLoader();
        }
                    /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function locale()
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->locale();
        }
                    /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->getLocale();
        }
                    /**
         * Set the default locale.
         *
         * @param string $locale
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function setLocale($locale)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        $instance->setLocale($locale);
        }
                    /**
         * Get the fallback locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function getFallback()
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        return $instance->getFallback();
        }
                    /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         * @return void 
         * @static 
         */ 
        public static function setFallback($fallback)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        $instance->setFallback($fallback);
        }
                    /**
         * Set the loaded translation groups.
         *
         * @param array $loaded
         * @return void 
         * @static 
         */ 
        public static function setLoaded($loaded)
        {
                        /** @var \Illuminate\Translation\Translator $instance */
                        $instance->setLoaded($loaded);
        }
                    /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         * @return void 
         * @static 
         */ 
        public static function setParsedKey($key, $parsed)
        {            //Method inherited from \Illuminate\Support\NamespacedItemResolver         
                        /** @var \Illuminate\Translation\Translator $instance */
                        $instance->setParsedKey($key, $parsed);
        }
                    /**
         * Flush the cache of parsed keys.
         *
         * @return void 
         * @static 
         */ 
        public static function flushParsedKeys()
        {            //Method inherited from \Illuminate\Support\NamespacedItemResolver         
                        /** @var \Illuminate\Translation\Translator $instance */
                        $instance->flushParsedKeys();
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
                        \Illuminate\Translation\Translator::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
                        \Illuminate\Translation\Translator::mixin($mixin, $replace);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
                        return \Illuminate\Translation\Translator::hasMacro($name);
        }
                    /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
                        \Illuminate\Translation\Translator::flushMacros();
        }
         
    }
     
}

    namespace Encore\Admin\Facades { 
            /**
     * Class Admin.
     *
     * @see \Encore\Admin\Admin
     */ 
        class Admin {
                    /**
         * Returns the long version of Laravel-admin.
         *
         * @return string The long application version
         * @static 
         */ 
        public static function getLongVersion()
        {
                        return \Encore\Admin\Admin::getLongVersion();
        }
                    /**
         * 
         *
         * @param $model
         * @param \Closure $callable
         * @return \Encore\Admin\Grid 
         * @deprecated since v1.6.1
         * @static 
         */ 
        public static function grid($model, $callable)
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->grid($model, $callable);
        }
                    /**
         * 
         *
         * @param $model
         * @param \Closure $callable
         * @return \Encore\Admin\Form @deprecated since v1.6.1
         * @static 
         */ 
        public static function form($model, $callable)
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->form($model, $callable);
        }
                    /**
         * Build a tree.
         *
         * @param $model
         * @param \Closure|null $callable
         * @return \Encore\Admin\Tree 
         * @static 
         */ 
        public static function tree($model, $callable = null)
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->tree($model, $callable);
        }
                    /**
         * Build show page.
         *
         * @param $model
         * @param mixed $callable
         * @return \Encore\Admin\Show 
         * @deprecated since v1.6.1
         * @static 
         */ 
        public static function show($model, $callable = null)
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->show($model, $callable);
        }
                    /**
         * 
         *
         * @param \Closure $callable
         * @return \Encore\Admin\Layout\Content 
         * @deprecated since v1.6.1
         * @static 
         */ 
        public static function content($callable = null)
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->content($callable);
        }
                    /**
         * 
         *
         * @param $model
         * @return mixed 
         * @static 
         */ 
        public static function getModel($model)
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->getModel($model);
        }
                    /**
         * Left sider-bar menu.
         *
         * @return array 
         * @static 
         */ 
        public static function menu()
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->menu();
        }
                    /**
         * 
         *
         * @param array $menu
         * @return array 
         * @static 
         */ 
        public static function menuLinks($menu = [])
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->menuLinks($menu);
        }
                    /**
         * Set admin title.
         *
         * @param string $title
         * @return void 
         * @static 
         */ 
        public static function setTitle($title)
        {
                        \Encore\Admin\Admin::setTitle($title);
        }
                    /**
         * Get admin title.
         *
         * @return string 
         * @static 
         */ 
        public static function title()
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->title();
        }
                    /**
         * 
         *
         * @param null|string $favicon
         * @return string|void 
         * @static 
         */ 
        public static function favicon($favicon = null)
        {
                        return \Encore\Admin\Admin::favicon($favicon);
        }
                    /**
         * Get the currently authenticated user.
         *
         * @return \App\Models\User|null 
         * @static 
         */ 
        public static function user()
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->user();
        }
                    /**
         * Attempt to get the guard from the local cache.
         *
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard 
         * @static 
         */ 
        public static function guard()
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->guard();
        }
                    /**
         * Set navbar.
         *
         * @param \Closure|null $builder
         * @return \Encore\Admin\Widgets\Navbar 
         * @static 
         */ 
        public static function navbar($builder = null)
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->navbar($builder);
        }
                    /**
         * Get navbar object.
         *
         * @return \Encore\Admin\Widgets\Navbar 
         * @static 
         */ 
        public static function getNavbar()
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->getNavbar();
        }
                    /**
         * Register the laravel-admin builtin routes.
         *
         * @return void 
         * @deprecated Use Admin::routes() instead();
         * @static 
         */ 
        public static function registerAuthRoutes()
        {
                        /** @var \Encore\Admin\Admin $instance */
                        $instance->registerAuthRoutes();
        }
                    /**
         * Register the laravel-admin builtin routes.
         *
         * @return void 
         * @static 
         */ 
        public static function routes()
        {
                        /** @var \Encore\Admin\Admin $instance */
                        $instance->routes();
        }
                    /**
         * Extend a extension.
         *
         * @param string $name
         * @param string $class
         * @return void 
         * @static 
         */ 
        public static function extend($name, $class)
        {
                        \Encore\Admin\Admin::extend($name, $class);
        }
                    /**
         * 
         *
         * @param callable $callback
         * @static 
         */ 
        public static function booting($callback)
        {
                        return \Encore\Admin\Admin::booting($callback);
        }
                    /**
         * 
         *
         * @param callable $callback
         * @static 
         */ 
        public static function booted($callback)
        {
                        return \Encore\Admin\Admin::booted($callback);
        }
                    /**
         * Bootstrap the admin application.
         *
         * @static 
         */ 
        public static function bootstrap()
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->bootstrap();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function disablePjax()
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->disablePjax();
        }
                    /**
         * Add css or get all css.
         *
         * @param null $css
         * @param bool $minify
         * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View 
         * @static 
         */ 
        public static function css($css = null, $minify = true)
        {
                        return \Encore\Admin\Admin::css($css, $minify);
        }
                    /**
         * 
         *
         * @param null $css
         * @param bool $minify
         * @return array|null 
         * @static 
         */ 
        public static function baseCss($css = null, $minify = true)
        {
                        return \Encore\Admin\Admin::baseCss($css, $minify);
        }
                    /**
         * Add js or get all js.
         *
         * @param null $js
         * @param bool $minify
         * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View 
         * @static 
         */ 
        public static function js($js = null, $minify = true)
        {
                        return \Encore\Admin\Admin::js($js, $minify);
        }
                    /**
         * Add js or get all js.
         *
         * @param null $js
         * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View 
         * @static 
         */ 
        public static function headerJs($js = null)
        {
                        return \Encore\Admin\Admin::headerJs($js);
        }
                    /**
         * 
         *
         * @param null $js
         * @param bool $minify
         * @return array|null 
         * @static 
         */ 
        public static function baseJs($js = null, $minify = true)
        {
                        return \Encore\Admin\Admin::baseJs($js, $minify);
        }
                    /**
         * 
         *
         * @param string $assets
         * @param bool $ignore
         * @static 
         */ 
        public static function ignoreMinify($assets, $ignore = true)
        {
                        return \Encore\Admin\Admin::ignoreMinify($assets, $ignore);
        }
                    /**
         * 
         *
         * @param string $script
         * @param bool $deferred
         * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View 
         * @static 
         */ 
        public static function script($script = '', $deferred = false)
        {
                        return \Encore\Admin\Admin::script($script, $deferred);
        }
                    /**
         * 
         *
         * @param string $style
         * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View 
         * @static 
         */ 
        public static function style($style = '')
        {
                        return \Encore\Admin\Admin::style($style);
        }
                    /**
         * 
         *
         * @param string $html
         * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View 
         * @static 
         */ 
        public static function html($html = '')
        {
                        return \Encore\Admin\Admin::html($html);
        }
                    /**
         * 
         *
         * @return string 
         * @static 
         */ 
        public static function jQuery()
        {
                        /** @var \Encore\Admin\Admin $instance */
                        return $instance->jQuery();
        }
                    /**
         * 
         *
         * @param $component
         * @static 
         */ 
        public static function component($component, $data = [])
        {
                        return \Encore\Admin\Admin::component($component, $data);
        }
         
    }
     
}

    namespace Clockwork\Support\Laravel { 
            /**
     * 
     *
     */ 
        class Facade {
                    /**
         * 
         *
         * @static 
         */ 
        public static function addDataSource($dataSource)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->addDataSource($dataSource);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveRequest()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->resolveRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveAsCommand($name, $exitCode = null, $arguments = [], $options = [], $argumentsDefaults = [], $optionsDefaults = [], $output = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->resolveAsCommand($name, $exitCode, $arguments, $options, $argumentsDefaults, $optionsDefaults, $output);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveAsQueueJob($name, $description = null, $status = 'processed', $payload = [], $queue = null, $connection = null, $options = [])
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->resolveAsQueueJob($name, $description, $status, $payload, $queue, $connection, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveAsTest($name, $status = 'passed', $statusMessage = null, $asserts = [])
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->resolveAsTest($name, $status, $statusMessage, $asserts);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extendRequest($request = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->extendRequest($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function storeRequest()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->storeRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reset()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->reset();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function request($request = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->request($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function log($level = null, $message = null, $context = [])
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->log($level, $message, $context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function timeline()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->timeline();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function event($description, $data = [])
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->event($description, $data);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function shouldCollect($shouldCollect = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->shouldCollect($shouldCollect);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function shouldRecord($shouldRecord = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->shouldRecord($shouldRecord);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dataSources($dataSources = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->dataSources($dataSources);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function storage($storage = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->storage($storage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function authenticator($authenticator = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->authenticator($authenticator);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDataSources()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->getDataSources();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRequest()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->getRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRequest($request)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->setRequest($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getStorage()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->getStorage();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setStorage($storage)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->setStorage($storage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getAuthenticator()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->getAuthenticator();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setAuthenticator($authenticator)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->setAuthenticator($authenticator);
        }
         
    }
     
}

    namespace Spatie\LaravelIgnition\Facades { 
            /**
     * 
     *
     * @see \Spatie\FlareClient\Flare
     */ 
        class Flare {
                    /**
         * 
         *
         * @static 
         */ 
        public static function make($apiKey = null, $contextDetector = null)
        {
                        return \Spatie\FlareClient\Flare::make($apiKey, $contextDetector);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setApiToken($apiToken)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setApiToken($apiToken);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function apiTokenSet()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->apiTokenSet();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setBaseUrl($baseUrl)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setBaseUrl($baseUrl);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setStage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setStage($stage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sendReportsImmediately()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendReportsImmediately();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function determineVersionUsing($determineVersionCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->determineVersionUsing($determineVersionCallable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reportErrorLevels($reportErrorLevels)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportErrorLevels($reportErrorLevels);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function filterExceptionsUsing($filterExceptionsCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->filterExceptionsUsing($filterExceptionsCallable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function filterReportsUsing($filterReportsCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->filterReportsUsing($filterReportsCallable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function version()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->version();
        }
                    /**
         * 
         *
         * @return \Spatie\FlareClient\array<int, FlareMiddleware|class-string<FlareMiddleware>>
         * @static 
         */ 
        public static function getMiddleware()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddleware();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContextProviderDetector($contextDetector)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContextProviderDetector($contextDetector);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerFlareHandlers()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerFlareHandlers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerExceptionHandler()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerExceptionHandler();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerErrorHandler()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerErrorHandler();
        }
                    /**
         * 
         *
         * @param \Spatie\FlareClient\FlareMiddleware\FlareMiddleware|\Spatie\FlareClient\array<FlareMiddleware>|\Spatie\FlareClient\class-string<FlareMiddleware> $middleware
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function registerMiddleware($middleware)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerMiddleware($middleware);
        }
                    /**
         * 
         *
         * @return \Spatie\FlareClient\array<int,FlareMiddleware|\Spatie\FlareClient\class-string<FlareMiddleware>> 
         * @static 
         */ 
        public static function getMiddlewares()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddlewares();
        }
                    /**
         * 
         *
         * @param string $name
         * @param string $messageLevel
         * @param \Spatie\FlareClient\array<int,  mixed> $metaData
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function glow($name, $messageLevel = 'info', $metaData = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->glow($name, $messageLevel, $metaData);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function handleException($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleException($throwable);
        }
                    /**
         * 
         *
         * @return mixed 
         * @static 
         */ 
        public static function handleError($code, $message, $file = '', $line = 0)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleError($code, $message, $file, $line);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function applicationPath($applicationPath)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->applicationPath($applicationPath);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function report($throwable, $callback = null, $report = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->report($throwable, $callback, $report);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reportMessage($message, $logLevel, $callback = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportMessage($message, $logLevel, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sendTestReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendTestReport($throwable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reset()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reset();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function anonymizeIp()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->anonymizeIp();
        }
                    /**
         * 
         *
         * @param \Spatie\FlareClient\array<int,  string> $fieldNames
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function censorRequestBodyFields($fieldNames)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->censorRequestBodyFields($fieldNames);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReport($throwable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createReportFromMessage($message, $logLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReportFromMessage($message, $logLevel);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->stage($stage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function messageLevel($messageLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->messageLevel($messageLevel);
        }
                    /**
         * 
         *
         * @param string $groupName
         * @param mixed $default
         * @return \Spatie\FlareClient\array<int, mixed>
         * @static 
         */ 
        public static function getGroup($groupName = 'context', $default = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getGroup($groupName, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function context($key, $value)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->context($key, $value);
        }
                    /**
         * 
         *
         * @param string $groupName
         * @param \Spatie\FlareClient\array<string,  mixed> $properties
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function group($groupName, $properties)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->group($groupName, $properties);
        }
         
    }
     
}

    namespace Illuminate\Http { 
            /**
     * 
     *
     */ 
        class Request {
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validate($rules, ...$params)
        {
                        return \Illuminate\Http\Request::validate($rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
                        return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignature($absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignature($absolute);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static 
         */ 
        public static function hasValidRelativeSignature()
        {
                        return \Illuminate\Http\Request::hasValidRelativeSignature();
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }
         
    }
     
}

    namespace Illuminate\Routing { 
            /**
     * 
     *
     * @mixin \Illuminate\Routing\RouteRegistrar
     */ 
        class Router {
                    /**
         * 
         *
         * @see \Encore\Admin\AdminServiceProvider::macroRouter()
         * @param mixed $uri
         * @param mixed $content
         * @param mixed $options
         * @static 
         */ 
        public static function content($uri, $content, $options = [])
        {
                        return \Illuminate\Routing\Router::content($uri, $content, $options);
        }
                    /**
         * 
         *
         * @see \Encore\Admin\AdminServiceProvider::macroRouter()
         * @param mixed $uri
         * @param mixed $component
         * @param mixed $data
         * @param mixed $options
         * @static 
         */ 
        public static function component($uri, $component, $data = [], $options = [])
        {
                        return \Illuminate\Routing\Router::component($uri, $component, $data, $options);
        }
         
    }
     
}


namespace  { 
            class RequestHelper extends \App\Facades\RequestHelperFacade {}
            class Request extends \Illuminate\Support\Facades\Request {}
            class Session extends \Illuminate\Support\Facades\Session {}
            class Lang extends \Illuminate\Support\Facades\Lang {}
            class Admin extends \Encore\Admin\Facades\Admin {}
            class Clockwork extends \Clockwork\Support\Laravel\Facade {}
            class Flare extends \Spatie\LaravelIgnition\Facades\Flare {}
     
}




