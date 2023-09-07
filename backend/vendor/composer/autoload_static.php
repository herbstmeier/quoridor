<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb0f41559f5095d945f608ab708442c5
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Slim\\Psr7\\' => 10,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Laravel\\SerializableClosure\\' => 28,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
            'Fig\\Http\\Message\\' => 17,
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'DI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Slim\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/psr7/src',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
            1 => __DIR__ . '/..' . '/psr/http-factory/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Laravel\\SerializableClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/serializable-closure/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Fig\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/fig/http-message-util/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DI\\Attribute\\Inject' => __DIR__ . '/..' . '/php-di/php-di/src/Attribute/Inject.php',
        'DI\\Attribute\\Injectable' => __DIR__ . '/..' . '/php-di/php-di/src/Attribute/Injectable.php',
        'DI\\CompiledContainer' => __DIR__ . '/..' . '/php-di/php-di/src/CompiledContainer.php',
        'DI\\Compiler\\Compiler' => __DIR__ . '/..' . '/php-di/php-di/src/Compiler/Compiler.php',
        'DI\\Compiler\\ObjectCreationCompiler' => __DIR__ . '/..' . '/php-di/php-di/src/Compiler/ObjectCreationCompiler.php',
        'DI\\Compiler\\RequestedEntryHolder' => __DIR__ . '/..' . '/php-di/php-di/src/Compiler/RequestedEntryHolder.php',
        'DI\\Container' => __DIR__ . '/..' . '/php-di/php-di/src/Container.php',
        'DI\\ContainerBuilder' => __DIR__ . '/..' . '/php-di/php-di/src/ContainerBuilder.php',
        'DI\\Definition\\ArrayDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ArrayDefinition.php',
        'DI\\Definition\\ArrayDefinitionExtension' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ArrayDefinitionExtension.php',
        'DI\\Definition\\AutowireDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/AutowireDefinition.php',
        'DI\\Definition\\DecoratorDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/DecoratorDefinition.php',
        'DI\\Definition\\Definition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Definition.php',
        'DI\\Definition\\Dumper\\ObjectDefinitionDumper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Dumper/ObjectDefinitionDumper.php',
        'DI\\Definition\\EnvironmentVariableDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/EnvironmentVariableDefinition.php',
        'DI\\Definition\\Exception\\InvalidAttribute' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Exception/InvalidAttribute.php',
        'DI\\Definition\\Exception\\InvalidDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Exception/InvalidDefinition.php',
        'DI\\Definition\\ExtendsPreviousDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ExtendsPreviousDefinition.php',
        'DI\\Definition\\FactoryDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/FactoryDefinition.php',
        'DI\\Definition\\Helper\\AutowireDefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/AutowireDefinitionHelper.php',
        'DI\\Definition\\Helper\\CreateDefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/CreateDefinitionHelper.php',
        'DI\\Definition\\Helper\\DefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/DefinitionHelper.php',
        'DI\\Definition\\Helper\\FactoryDefinitionHelper' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Helper/FactoryDefinitionHelper.php',
        'DI\\Definition\\InstanceDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/InstanceDefinition.php',
        'DI\\Definition\\ObjectDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ObjectDefinition.php',
        'DI\\Definition\\ObjectDefinition\\MethodInjection' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ObjectDefinition/MethodInjection.php',
        'DI\\Definition\\ObjectDefinition\\PropertyInjection' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ObjectDefinition/PropertyInjection.php',
        'DI\\Definition\\Reference' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Reference.php',
        'DI\\Definition\\Resolver\\ArrayResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ArrayResolver.php',
        'DI\\Definition\\Resolver\\DecoratorResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/DecoratorResolver.php',
        'DI\\Definition\\Resolver\\DefinitionResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/DefinitionResolver.php',
        'DI\\Definition\\Resolver\\EnvironmentVariableResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/EnvironmentVariableResolver.php',
        'DI\\Definition\\Resolver\\FactoryResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/FactoryResolver.php',
        'DI\\Definition\\Resolver\\InstanceInjector' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/InstanceInjector.php',
        'DI\\Definition\\Resolver\\ObjectCreator' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ObjectCreator.php',
        'DI\\Definition\\Resolver\\ParameterResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ParameterResolver.php',
        'DI\\Definition\\Resolver\\ResolverDispatcher' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Resolver/ResolverDispatcher.php',
        'DI\\Definition\\SelfResolvingDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/SelfResolvingDefinition.php',
        'DI\\Definition\\Source\\AttributeBasedAutowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/AttributeBasedAutowiring.php',
        'DI\\Definition\\Source\\Autowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/Autowiring.php',
        'DI\\Definition\\Source\\DefinitionArray' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionArray.php',
        'DI\\Definition\\Source\\DefinitionFile' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionFile.php',
        'DI\\Definition\\Source\\DefinitionNormalizer' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionNormalizer.php',
        'DI\\Definition\\Source\\DefinitionSource' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/DefinitionSource.php',
        'DI\\Definition\\Source\\MutableDefinitionSource' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/MutableDefinitionSource.php',
        'DI\\Definition\\Source\\NoAutowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/NoAutowiring.php',
        'DI\\Definition\\Source\\ReflectionBasedAutowiring' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/ReflectionBasedAutowiring.php',
        'DI\\Definition\\Source\\SourceCache' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/SourceCache.php',
        'DI\\Definition\\Source\\SourceChain' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/Source/SourceChain.php',
        'DI\\Definition\\StringDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/StringDefinition.php',
        'DI\\Definition\\ValueDefinition' => __DIR__ . '/..' . '/php-di/php-di/src/Definition/ValueDefinition.php',
        'DI\\DependencyException' => __DIR__ . '/..' . '/php-di/php-di/src/DependencyException.php',
        'DI\\FactoryInterface' => __DIR__ . '/..' . '/php-di/php-di/src/FactoryInterface.php',
        'DI\\Factory\\RequestedEntry' => __DIR__ . '/..' . '/php-di/php-di/src/Factory/RequestedEntry.php',
        'DI\\Invoker\\DefinitionParameterResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Invoker/DefinitionParameterResolver.php',
        'DI\\Invoker\\FactoryParameterResolver' => __DIR__ . '/..' . '/php-di/php-di/src/Invoker/FactoryParameterResolver.php',
        'DI\\NotFoundException' => __DIR__ . '/..' . '/php-di/php-di/src/NotFoundException.php',
        'DI\\Proxy\\ProxyFactory' => __DIR__ . '/..' . '/php-di/php-di/src/Proxy/ProxyFactory.php',
        'FastRoute\\BadRouteException' => __DIR__ . '/..' . '/nikic/fast-route/src/BadRouteException.php',
        'FastRoute\\DataGenerator' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator.php',
        'FastRoute\\DataGenerator\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/CharCountBased.php',
        'FastRoute\\DataGenerator\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupCountBased.php',
        'FastRoute\\DataGenerator\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupPosBased.php',
        'FastRoute\\DataGenerator\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/MarkBased.php',
        'FastRoute\\DataGenerator\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/RegexBasedAbstract.php',
        'FastRoute\\Dispatcher' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher.php',
        'FastRoute\\Dispatcher\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/CharCountBased.php',
        'FastRoute\\Dispatcher\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupCountBased.php',
        'FastRoute\\Dispatcher\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupPosBased.php',
        'FastRoute\\Dispatcher\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/MarkBased.php',
        'FastRoute\\Dispatcher\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/RegexBasedAbstract.php',
        'FastRoute\\Route' => __DIR__ . '/..' . '/nikic/fast-route/src/Route.php',
        'FastRoute\\RouteCollector' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteCollector.php',
        'FastRoute\\RouteParser' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser.php',
        'FastRoute\\RouteParser\\Std' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser/Std.php',
        'Fig\\Http\\Message\\RequestMethodInterface' => __DIR__ . '/..' . '/fig/http-message-util/src/RequestMethodInterface.php',
        'Fig\\Http\\Message\\StatusCodeInterface' => __DIR__ . '/..' . '/fig/http-message-util/src/StatusCodeInterface.php',
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\CachedKeySet' => __DIR__ . '/..' . '/firebase/php-jwt/src/CachedKeySet.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWK' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWK.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\Key' => __DIR__ . '/..' . '/firebase/php-jwt/src/Key.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'Invoker\\CallableResolver' => __DIR__ . '/..' . '/php-di/invoker/src/CallableResolver.php',
        'Invoker\\Exception\\InvocationException' => __DIR__ . '/..' . '/php-di/invoker/src/Exception/InvocationException.php',
        'Invoker\\Exception\\NotCallableException' => __DIR__ . '/..' . '/php-di/invoker/src/Exception/NotCallableException.php',
        'Invoker\\Exception\\NotEnoughParametersException' => __DIR__ . '/..' . '/php-di/invoker/src/Exception/NotEnoughParametersException.php',
        'Invoker\\Invoker' => __DIR__ . '/..' . '/php-di/invoker/src/Invoker.php',
        'Invoker\\InvokerInterface' => __DIR__ . '/..' . '/php-di/invoker/src/InvokerInterface.php',
        'Invoker\\ParameterResolver\\AssociativeArrayResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/AssociativeArrayResolver.php',
        'Invoker\\ParameterResolver\\Container\\ParameterNameContainerResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/Container/ParameterNameContainerResolver.php',
        'Invoker\\ParameterResolver\\Container\\TypeHintContainerResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/Container/TypeHintContainerResolver.php',
        'Invoker\\ParameterResolver\\DefaultValueResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/DefaultValueResolver.php',
        'Invoker\\ParameterResolver\\NumericArrayResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/NumericArrayResolver.php',
        'Invoker\\ParameterResolver\\ParameterResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/ParameterResolver.php',
        'Invoker\\ParameterResolver\\ResolverChain' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/ResolverChain.php',
        'Invoker\\ParameterResolver\\TypeHintResolver' => __DIR__ . '/..' . '/php-di/invoker/src/ParameterResolver/TypeHintResolver.php',
        'Invoker\\Reflection\\CallableReflection' => __DIR__ . '/..' . '/php-di/invoker/src/Reflection/CallableReflection.php',
        'Laravel\\SerializableClosure\\Contracts\\Serializable' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Contracts/Serializable.php',
        'Laravel\\SerializableClosure\\Contracts\\Signer' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Contracts/Signer.php',
        'Laravel\\SerializableClosure\\Exceptions\\InvalidSignatureException' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Exceptions/InvalidSignatureException.php',
        'Laravel\\SerializableClosure\\Exceptions\\MissingSecretKeyException' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Exceptions/MissingSecretKeyException.php',
        'Laravel\\SerializableClosure\\Exceptions\\PhpVersionNotSupportedException' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Exceptions/PhpVersionNotSupportedException.php',
        'Laravel\\SerializableClosure\\SerializableClosure' => __DIR__ . '/..' . '/laravel/serializable-closure/src/SerializableClosure.php',
        'Laravel\\SerializableClosure\\Serializers\\Native' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Serializers/Native.php',
        'Laravel\\SerializableClosure\\Serializers\\Signed' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Serializers/Signed.php',
        'Laravel\\SerializableClosure\\Signers\\Hmac' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Signers/Hmac.php',
        'Laravel\\SerializableClosure\\Support\\ClosureScope' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/ClosureScope.php',
        'Laravel\\SerializableClosure\\Support\\ClosureStream' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/ClosureStream.php',
        'Laravel\\SerializableClosure\\Support\\ReflectionClosure' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/ReflectionClosure.php',
        'Laravel\\SerializableClosure\\Support\\SelfReference' => __DIR__ . '/..' . '/laravel/serializable-closure/src/Support/SelfReference.php',
        'Laravel\\SerializableClosure\\UnsignedSerializableClosure' => __DIR__ . '/..' . '/laravel/serializable-closure/src/UnsignedSerializableClosure.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Psr\\Http\\Server\\MiddlewareInterface' => __DIR__ . '/..' . '/psr/http-server-middleware/src/MiddlewareInterface.php',
        'Psr\\Http\\Server\\RequestHandlerInterface' => __DIR__ . '/..' . '/psr/http-server-handler/src/RequestHandlerInterface.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/src/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/src/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/src/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/src/NullLogger.php',
        'Slim\\App' => __DIR__ . '/..' . '/slim/slim/Slim/App.php',
        'Slim\\CallableResolver' => __DIR__ . '/..' . '/slim/slim/Slim/CallableResolver.php',
        'Slim\\Error\\AbstractErrorRenderer' => __DIR__ . '/..' . '/slim/slim/Slim/Error/AbstractErrorRenderer.php',
        'Slim\\Error\\Renderers\\HtmlErrorRenderer' => __DIR__ . '/..' . '/slim/slim/Slim/Error/Renderers/HtmlErrorRenderer.php',
        'Slim\\Error\\Renderers\\JsonErrorRenderer' => __DIR__ . '/..' . '/slim/slim/Slim/Error/Renderers/JsonErrorRenderer.php',
        'Slim\\Error\\Renderers\\PlainTextErrorRenderer' => __DIR__ . '/..' . '/slim/slim/Slim/Error/Renderers/PlainTextErrorRenderer.php',
        'Slim\\Error\\Renderers\\XmlErrorRenderer' => __DIR__ . '/..' . '/slim/slim/Slim/Error/Renderers/XmlErrorRenderer.php',
        'Slim\\Exception\\HttpBadRequestException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpBadRequestException.php',
        'Slim\\Exception\\HttpException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpException.php',
        'Slim\\Exception\\HttpForbiddenException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpForbiddenException.php',
        'Slim\\Exception\\HttpGoneException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpGoneException.php',
        'Slim\\Exception\\HttpInternalServerErrorException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpInternalServerErrorException.php',
        'Slim\\Exception\\HttpMethodNotAllowedException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpMethodNotAllowedException.php',
        'Slim\\Exception\\HttpNotFoundException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpNotFoundException.php',
        'Slim\\Exception\\HttpNotImplementedException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpNotImplementedException.php',
        'Slim\\Exception\\HttpSpecializedException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpSpecializedException.php',
        'Slim\\Exception\\HttpUnauthorizedException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/HttpUnauthorizedException.php',
        'Slim\\Factory\\AppFactory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/AppFactory.php',
        'Slim\\Factory\\Psr17\\GuzzlePsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/GuzzlePsr17Factory.php',
        'Slim\\Factory\\Psr17\\HttpSoftPsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/HttpSoftPsr17Factory.php',
        'Slim\\Factory\\Psr17\\LaminasDiactorosPsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/LaminasDiactorosPsr17Factory.php',
        'Slim\\Factory\\Psr17\\NyholmPsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/NyholmPsr17Factory.php',
        'Slim\\Factory\\Psr17\\Psr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/Psr17Factory.php',
        'Slim\\Factory\\Psr17\\Psr17FactoryProvider' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/Psr17FactoryProvider.php',
        'Slim\\Factory\\Psr17\\ServerRequestCreator' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/ServerRequestCreator.php',
        'Slim\\Factory\\Psr17\\SlimHttpPsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/SlimHttpPsr17Factory.php',
        'Slim\\Factory\\Psr17\\SlimHttpServerRequestCreator' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/SlimHttpServerRequestCreator.php',
        'Slim\\Factory\\Psr17\\SlimPsr17Factory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/Psr17/SlimPsr17Factory.php',
        'Slim\\Factory\\ServerRequestCreatorFactory' => __DIR__ . '/..' . '/slim/slim/Slim/Factory/ServerRequestCreatorFactory.php',
        'Slim\\Handlers\\ErrorHandler' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/ErrorHandler.php',
        'Slim\\Handlers\\Strategies\\RequestHandler' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestHandler.php',
        'Slim\\Handlers\\Strategies\\RequestResponse' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponse.php',
        'Slim\\Handlers\\Strategies\\RequestResponseArgs' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponseArgs.php',
        'Slim\\Handlers\\Strategies\\RequestResponseNamedArgs' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponseNamedArgs.php',
        'Slim\\Interfaces\\AdvancedCallableResolverInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/AdvancedCallableResolverInterface.php',
        'Slim\\Interfaces\\CallableResolverInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/CallableResolverInterface.php',
        'Slim\\Interfaces\\DispatcherInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/DispatcherInterface.php',
        'Slim\\Interfaces\\ErrorHandlerInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/ErrorHandlerInterface.php',
        'Slim\\Interfaces\\ErrorRendererInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/ErrorRendererInterface.php',
        'Slim\\Interfaces\\InvocationStrategyInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/InvocationStrategyInterface.php',
        'Slim\\Interfaces\\MiddlewareDispatcherInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/MiddlewareDispatcherInterface.php',
        'Slim\\Interfaces\\Psr17FactoryInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Psr17FactoryInterface.php',
        'Slim\\Interfaces\\Psr17FactoryProviderInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Psr17FactoryProviderInterface.php',
        'Slim\\Interfaces\\RequestHandlerInvocationStrategyInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RequestHandlerInvocationStrategyInterface.php',
        'Slim\\Interfaces\\RouteCollectorInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteCollectorInterface.php',
        'Slim\\Interfaces\\RouteCollectorProxyInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteCollectorProxyInterface.php',
        'Slim\\Interfaces\\RouteGroupInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteGroupInterface.php',
        'Slim\\Interfaces\\RouteInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteInterface.php',
        'Slim\\Interfaces\\RouteParserInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteParserInterface.php',
        'Slim\\Interfaces\\RouteResolverInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteResolverInterface.php',
        'Slim\\Interfaces\\ServerRequestCreatorInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/ServerRequestCreatorInterface.php',
        'Slim\\Logger' => __DIR__ . '/..' . '/slim/slim/Slim/Logger.php',
        'Slim\\MiddlewareDispatcher' => __DIR__ . '/..' . '/slim/slim/Slim/MiddlewareDispatcher.php',
        'Slim\\Middleware\\BodyParsingMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/BodyParsingMiddleware.php',
        'Slim\\Middleware\\ContentLengthMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/ContentLengthMiddleware.php',
        'Slim\\Middleware\\ErrorMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/ErrorMiddleware.php',
        'Slim\\Middleware\\MethodOverrideMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/MethodOverrideMiddleware.php',
        'Slim\\Middleware\\OutputBufferingMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/OutputBufferingMiddleware.php',
        'Slim\\Middleware\\RoutingMiddleware' => __DIR__ . '/..' . '/slim/slim/Slim/Middleware/RoutingMiddleware.php',
        'Slim\\Psr7\\Cookies' => __DIR__ . '/..' . '/slim/psr7/src/Cookies.php',
        'Slim\\Psr7\\Environment' => __DIR__ . '/..' . '/slim/psr7/src/Environment.php',
        'Slim\\Psr7\\Factory\\RequestFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/RequestFactory.php',
        'Slim\\Psr7\\Factory\\ResponseFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/ResponseFactory.php',
        'Slim\\Psr7\\Factory\\ServerRequestFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/ServerRequestFactory.php',
        'Slim\\Psr7\\Factory\\StreamFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/StreamFactory.php',
        'Slim\\Psr7\\Factory\\UploadedFileFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/UploadedFileFactory.php',
        'Slim\\Psr7\\Factory\\UriFactory' => __DIR__ . '/..' . '/slim/psr7/src/Factory/UriFactory.php',
        'Slim\\Psr7\\Header' => __DIR__ . '/..' . '/slim/psr7/src/Header.php',
        'Slim\\Psr7\\Headers' => __DIR__ . '/..' . '/slim/psr7/src/Headers.php',
        'Slim\\Psr7\\Interfaces\\HeadersInterface' => __DIR__ . '/..' . '/slim/psr7/src/Interfaces/HeadersInterface.php',
        'Slim\\Psr7\\Message' => __DIR__ . '/..' . '/slim/psr7/src/Message.php',
        'Slim\\Psr7\\NonBufferedBody' => __DIR__ . '/..' . '/slim/psr7/src/NonBufferedBody.php',
        'Slim\\Psr7\\Request' => __DIR__ . '/..' . '/slim/psr7/src/Request.php',
        'Slim\\Psr7\\Response' => __DIR__ . '/..' . '/slim/psr7/src/Response.php',
        'Slim\\Psr7\\Stream' => __DIR__ . '/..' . '/slim/psr7/src/Stream.php',
        'Slim\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/slim/psr7/src/UploadedFile.php',
        'Slim\\Psr7\\Uri' => __DIR__ . '/..' . '/slim/psr7/src/Uri.php',
        'Slim\\ResponseEmitter' => __DIR__ . '/..' . '/slim/slim/Slim/ResponseEmitter.php',
        'Slim\\Routing\\Dispatcher' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/Dispatcher.php',
        'Slim\\Routing\\FastRouteDispatcher' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/FastRouteDispatcher.php',
        'Slim\\Routing\\Route' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/Route.php',
        'Slim\\Routing\\RouteCollector' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteCollector.php',
        'Slim\\Routing\\RouteCollectorProxy' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteCollectorProxy.php',
        'Slim\\Routing\\RouteContext' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteContext.php',
        'Slim\\Routing\\RouteGroup' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteGroup.php',
        'Slim\\Routing\\RouteParser' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteParser.php',
        'Slim\\Routing\\RouteResolver' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteResolver.php',
        'Slim\\Routing\\RouteRunner' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RouteRunner.php',
        'Slim\\Routing\\RoutingResults' => __DIR__ . '/..' . '/slim/slim/Slim/Routing/RoutingResults.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'Symfony\\Polyfill\\Php80\\PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/PhpToken.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb0f41559f5095d945f608ab708442c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb0f41559f5095d945f608ab708442c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfb0f41559f5095d945f608ab708442c5::$classMap;

        }, null, ClassLoader::class);
    }
}
