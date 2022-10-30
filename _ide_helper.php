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


namespace  { 
            class RequestHelper extends \App\Facades\RequestHelperFacade {}
            class Clockwork extends \Clockwork\Support\Laravel\Facade {}
            class Flare extends \Spatie\LaravelIgnition\Facades\Flare {}
     
}




