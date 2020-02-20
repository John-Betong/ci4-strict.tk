Source files:

Special notes:

<h2>      
  <a href="https://ci4-strict.tk/">
    Online Demo
  </a>
</h2>    


Gitub CodeIgniter4 source files
   DECLARE(STRICT_TYPES=1); inserted into every PHP file. 
   ONLY PHP files are modified.

The CodeIgniter4 Repository, for some strange reason, does not DECLARE(STRICT_TYPES=1); which I find most peculiar especially since many functions parameter types are set? When parameters are set, variable type errors are detected thus making the PHP just that little bit more robust. 

No doubt when modifying this Repository validation type errors will appear but they will be far easier to fix because rendering fails fast and all error must be fixed before proceeding!

enjoy :)


The following files were obtained from the CodeIgniter4 Repository and now have the strict types declaration included.

Source: CodeIgniter4
    sudo git clone https://github.com/codeigniter4/CodeIgniter4.git 
    Build: dfd3555  
      
Source: John-Betong/ci4-strict
    sudo git clone https://github.com/John-Betong/ci4-strict.git 
      
NOT PHP files: 19

    app/index.html
    app/Views/errors/html/debug.css
    app/Views/errors/html/debug.js
    public/favicon.ico
    public/robots.txt
    system/index.html
    system/Debug/Toolbar/Views/_config.tpl
    system/Debug/Toolbar/Views/_database.tpl
    system/Debug/Toolbar/Views/_events.tpl
    system/Debug/Toolbar/Views/_files.tpl
    system/Debug/Toolbar/Views/_history.tpl
    system/Debug/Toolbar/Views/_logs.tpl
    system/Debug/Toolbar/Views/_routes.tpl
    system/Debug/Toolbar/Views/toolbar.css
    system/Debug/Toolbar/Views/toolbar.js
    writable/cache/index.html
    writable/logs/index.html
    writable/session/index.html
    writable/uploads/index.html
     

     
Strict_types=1 inserted into PHP files: 317

    app/Common.php
    app/Config/App.php
    app/Config/Autoload.php
    app/Config/Cache.php
    app/Config/Constants.php
    app/Config/ContentSecurityPolicy.php
    app/Config/Database.php
    app/Config/DocTypes.php
    app/Config/Email.php
    app/Config/Encryption.php
    app/Config/Events.php
    app/Config/Exceptions.php
    app/Config/Filters.php
    app/Config/ForeignCharacters.php
    app/Config/Format.php
    app/Config/Honeypot.php
    app/Config/Images.php
    app/Config/Logger.php
    app/Config/Migrations.php
    app/Config/Mimes.php
    app/Config/Modules.php
    app/Config/Pager.php
    app/Config/Paths.php
    app/Config/Routes.php
    app/Config/Services.php
    app/Config/Toolbar.php
    app/Config/UserAgents.php
    app/Config/Validation.php
    app/Config/View.php
    app/Controllers/BaseController.php
    app/Controllers/Home.php
    app/Views/welcome_message.php
    app/Config/Boot/development.php
    app/Config/Boot/production.php
    app/Config/Boot/testing.php
    app/Views/errors/cli/error_404.php
    app/Views/errors/cli/error_exception.php
    app/Views/errors/cli/production.php
    app/Views/errors/html/error_404.php
    app/Views/errors/html/error_exception.php
    app/Views/errors/html/production.php
    public/index.php
    system/CodeIgniter.php
    system/Common.php
    system/ComposerScripts.php
    system/Controller.php
    system/Entity.php
    system/Model.php
    system/bootstrap.php
    system/API/ResponseTrait.php
    system/Autoloader/Autoloader.php
    system/Autoloader/FileLocator.php
    system/CLI/BaseCommand.php
    system/CLI/CLI.php
    system/CLI/CommandRunner.php
    system/CLI/Console.php
    system/Cache/CacheFactory.php
    system/Cache/CacheInterface.php
    system/Commands/Help.php
    system/Commands/ListCommands.php
    system/Config/AutoloadConfig.php
    system/Config/BaseConfig.php
    system/Config/BaseService.php
    system/Config/Config.php
    system/Config/DotEnv.php
    system/Config/ForeignCharacters.php
    system/Config/Routes.php
    system/Config/Services.php
    system/Config/View.php
    system/Database/BaseBuilder.php
    system/Database/BaseConnection.php
    system/Database/BasePreparedQuery.php
    system/Database/BaseResult.php
    system/Database/BaseUtils.php
    system/Database/Config.php
    system/Database/ConnectionInterface.php
    system/Database/Database.php
    system/Database/Forge.php
    system/Database/Migration.php
    system/Database/MigrationRunner.php
    system/Database/ModelFactory.php
    system/Database/PreparedQueryInterface.php
    system/Database/Query.php
    system/Database/QueryInterface.php
    system/Database/ResultInterface.php
    system/Database/Seeder.php
    system/Debug/Exceptions.php
    system/Debug/Iterator.php
    system/Debug/Timer.php
    system/Debug/Toolbar.php
    system/Email/Email.php
    system/Encryption/EncrypterInterface.php
    system/Encryption/Encryption.php
    system/Events/Events.php
    system/Exceptions/AlertError.php
    system/Exceptions/CastException.php
    system/Exceptions/ConfigException.php
    system/Exceptions/CriticalError.php
    system/Exceptions/DownloadException.php
    system/Exceptions/EmergencyError.php
    system/Exceptions/ExceptionInterface.php
    system/Exceptions/FrameworkException.php
    system/Exceptions/ModelException.php
    system/Exceptions/PageNotFoundException.php
    system/Files/File.php
    system/Filters/CSRF.php
    system/Filters/DebugToolbar.php
    system/Filters/FilterInterface.php
    system/Filters/Filters.php
    system/Filters/Honeypot.php
    system/Format/FormatterInterface.php
    system/Format/JSONFormatter.php
    system/Format/XMLFormatter.php
    system/HTTP/CLIRequest.php
    system/HTTP/CURLRequest.php
    system/HTTP/ContentSecurityPolicy.php
    system/HTTP/DownloadResponse.php
    system/HTTP/Header.php
    system/HTTP/IncomingRequest.php
    system/HTTP/Message.php
    system/HTTP/Negotiate.php
    system/HTTP/RedirectResponse.php
    system/HTTP/Request.php
    system/HTTP/RequestInterface.php
    system/HTTP/Response.php
    system/HTTP/ResponseInterface.php
    system/HTTP/URI.php
    system/HTTP/UserAgent.php
    system/Helpers/array_helper.php
    system/Helpers/cookie_helper.php
    system/Helpers/date_helper.php
    system/Helpers/filesystem_helper.php
    system/Helpers/form_helper.php
    system/Helpers/html_helper.php
    system/Helpers/inflector_helper.php
    system/Helpers/number_helper.php
    system/Helpers/security_helper.php
    system/Helpers/text_helper.php
    system/Helpers/url_helper.php
    system/Helpers/xml_helper.php
    system/Honeypot/Honeypot.php
    system/I18n/Time.php
    system/I18n/TimeDifference.php
    system/Images/Image.php
    system/Images/ImageHandlerInterface.php
    system/Language/Language.php
    system/Log/Logger.php
    system/Pager/Pager.php
    system/Pager/PagerInterface.php
    system/Pager/PagerRenderer.php
    system/RESTful/ResourceController.php
    system/RESTful/ResourcePresenter.php
    system/Router/RouteCollection.php
    system/Router/RouteCollectionInterface.php
    system/Router/Router.php
    system/Router/RouterInterface.php
    system/Security/Security.php
    system/Session/Session.php
    system/Session/SessionInterface.php
    system/Test/CIDatabaseTestCase.php
    system/Test/CIUnitTestCase.php
    system/Test/ControllerResponse.php
    system/Test/ControllerTester.php
    system/Test/DOMParser.php
    system/Test/FeatureResponse.php
    system/Test/FeatureTestCase.php
    system/Test/ReflectionHelper.php
    system/Throttle/Throttler.php
    system/Throttle/ThrottlerInterface.php
    system/Typography/Typography.php
    system/Validation/CreditCardRules.php
    system/Validation/FileRules.php
    system/Validation/FormatRules.php
    system/Validation/Rules.php
    system/Validation/Validation.php
    system/Validation/ValidationInterface.php
    system/View/Cell.php
    system/View/Filters.php
    system/View/Parser.php
    system/View/Plugins.php
    system/View/RendererInterface.php
    system/View/Table.php
    system/View/View.php
    system/CLI/Exceptions/CLIException.php
    system/Cache/Exceptions/CacheException.php
    system/Cache/Exceptions/ExceptionInterface.php
    system/Cache/Handlers/DummyHandler.php
    system/Cache/Handlers/FileHandler.php
    system/Cache/Handlers/MemcachedHandler.php
    system/Cache/Handlers/PredisHandler.php
    system/Cache/Handlers/RedisHandler.php
    system/Cache/Handlers/WincacheHandler.php
    system/Commands/Database/CreateMigration.php
    system/Commands/Database/Migrate.php
    system/Commands/Database/MigrateRefresh.php
    system/Commands/Database/MigrateRollback.php
    system/Commands/Database/MigrateStatus.php
    system/Commands/Database/Seed.php
    system/Commands/Server/Serve.php
    system/Commands/Server/rewrite.php
    system/Commands/Sessions/CreateMigration.php
    system/Commands/Utilities/Namespaces.php
    system/Commands/Utilities/Routes.php
    system/Database/Exceptions/DataException.php
    system/Database/Exceptions/DatabaseException.php
    system/Database/Exceptions/ExceptionInterface.php
    system/Database/MySQLi/Builder.php
    system/Database/MySQLi/Connection.php
    system/Database/MySQLi/Forge.php
    system/Database/MySQLi/PreparedQuery.php
    system/Database/MySQLi/Result.php
    system/Database/MySQLi/Utils.php
    system/Database/Postgre/Builder.php
    system/Database/Postgre/Connection.php
    system/Database/Postgre/Forge.php
    system/Database/Postgre/PreparedQuery.php
    system/Database/Postgre/Result.php
    system/Database/Postgre/Utils.php
    system/Database/SQLite3/Builder.php
    system/Database/SQLite3/Connection.php
    system/Database/SQLite3/Forge.php
    system/Database/SQLite3/PreparedQuery.php
    system/Database/SQLite3/Result.php
    system/Database/SQLite3/Table.php
    system/Database/SQLite3/Utils.php
    system/Encryption/Exceptions/EncryptionException.php
    system/Encryption/Handlers/BaseHandler.php
    system/Encryption/Handlers/OpenSSLHandler.php
    system/Files/Exceptions/FileException.php
    system/Files/Exceptions/FileNotFoundException.php
    system/Filters/Exceptions/FilterException.php
    system/Format/Exceptions/FormatException.php
    system/HTTP/Exceptions/HTTPException.php
    system/HTTP/Files/FileCollection.php
    system/HTTP/Files/UploadedFile.php
    system/HTTP/Files/UploadedFileInterface.php
    system/Honeypot/Exceptions/HoneypotException.php
    system/I18n/Exceptions/I18nException.php
    system/Images/Exceptions/ImageException.php
    system/Images/Handlers/BaseHandler.php
    system/Images/Handlers/GDHandler.php
    system/Images/Handlers/ImageMagickHandler.php
    system/Language/en/CLI.php
    system/Language/en/Cache.php
    system/Language/en/Cast.php
    system/Language/en/Core.php
    system/Language/en/Database.php
    system/Language/en/Email.php
    system/Language/en/Encryption.php
    system/Language/en/Entity.php
    system/Language/en/Files.php
    system/Language/en/Filters.php
    system/Language/en/Format.php
    system/Language/en/HTTP.php
    system/Language/en/Images.php
    system/Language/en/Language.php
    system/Language/en/Log.php
    system/Language/en/Migrations.php
    system/Language/en/Number.php
    system/Language/en/Pager.php
    system/Language/en/RESTful.php
    system/Language/en/Redirect.php
    system/Language/en/Router.php
    system/Language/en/Session.php
    system/Language/en/Time.php
    system/Language/en/Validation.php
    system/Language/en/View.php
    system/Log/Exceptions/LogException.php
    system/Log/Handlers/BaseHandler.php
    system/Log/Handlers/ChromeLoggerHandler.php
    system/Log/Handlers/FileHandler.php
    system/Log/Handlers/HandlerInterface.php
    system/Pager/Exceptions/PagerException.php
    system/Pager/Views/default_full.php
    system/Pager/Views/default_head.php
    system/Pager/Views/default_simple.php
    system/Router/Exceptions/RedirectException.php
    system/Router/Exceptions/RouterException.php
    system/Security/Exceptions/SecurityException.php
    system/Session/Exceptions/SessionException.php
    system/Session/Handlers/ArrayHandler.php
    system/Session/Handlers/BaseHandler.php
    system/Session/Handlers/DatabaseHandler.php
    system/Session/Handlers/FileHandler.php
    system/Session/Handlers/MemcachedHandler.php
    system/Session/Handlers/RedisHandler.php
    system/Test/Filters/CITestStreamFilter.php
    system/ThirdParty/Escaper/Escaper.php
    system/ThirdParty/Kint/kint.php
    system/Validation/Exceptions/ValidationException.php
    system/Validation/Views/list.php
    system/Validation/Views/single.php
    system/View/Exceptions/ViewException.php
    system/Commands/Sessions/Views/migration.tpl.php
    system/Debug/Toolbar/Collectors/BaseCollector.php
    system/Debug/Toolbar/Collectors/Config.php
    system/Debug/Toolbar/Collectors/Database.php
    system/Debug/Toolbar/Collectors/Events.php
    system/Debug/Toolbar/Collectors/Files.php
    system/Debug/Toolbar/Collectors/History.php
    system/Debug/Toolbar/Collectors/Logs.php
    system/Debug/Toolbar/Collectors/Routes.php
    system/Debug/Toolbar/Collectors/Timers.php
    system/Debug/Toolbar/Collectors/Views.php
    system/Debug/Toolbar/Views/toolbar.tpl.php
    system/Debug/Toolbar/Views/toolbarloader.js.php
    system/ThirdParty/Escaper/Exception/ExceptionInterface.php
    system/ThirdParty/Escaper/Exception/InvalidArgumentException.php
    system/ThirdParty/Escaper/Exception/RuntimeException.php
    system/ThirdParty/PSR/Log/AbstractLogger.php
    system/ThirdParty/PSR/Log/InvalidArgumentException.php
    system/ThirdParty/PSR/Log/LogLevel.php
    system/ThirdParty/PSR/Log/LoggerAwareInterface.php
    system/ThirdParty/PSR/Log/LoggerAwareTrait.php
    system/ThirdParty/PSR/Log/LoggerInterface.php
    system/ThirdParty/PSR/Log/LoggerTrait.php
    system/ThirdParty/PSR/Log/NullLogger.php
     

     