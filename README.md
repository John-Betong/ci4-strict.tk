# ci4-strict
CodeIgniter4 with  DECLARE(STRICT_TYPES=1);  inserted for a better coding experience


Source:
    <b>sudo git clone:</b> https://github.com/codeigniter4/CodeIgniter4.git 
    <b>Build:</b> 6106bf6
 
      
    File type   total   inserted strict     todo
    Not PHP     27       
    PHP         327     300                 15


    NOT PHP files: 27

    Array
    (
        [0] => app/index.html
        [1] => app/Views/errors/html/debug.css
        [2] => app/Views/errors/html/debug.js
        [3] => public_html/favicon.ico
        [4] => public_html/index.html
        [5] => public_html/robots.txt
        [6] => public_html/zips/ci4-strict.tk.7z
        [7] => public_html/zips/ci4-strict.tk.tar.xz
        [8] => public_html/zips/ci4-strict.tk.zip
        [9] => public_html/assets/imgs/Screenshot from 2019-10-10 11-44-13.png
        [10] => public_html/assets/imgs/Whoops.png
        [11] => public_html/assets/imgs/screenshot-from-2019-10-10 11-44-13.png
        [12] => public_html/assets/svg/logo.svg
        [13] => system/index.html
        [14] => system/Debug/Toolbar/Views/_config.tpl
        [15] => system/Debug/Toolbar/Views/_database.tpl
        [16] => system/Debug/Toolbar/Views/_events.tpl
        [17] => system/Debug/Toolbar/Views/_files.tpl
        [18] => system/Debug/Toolbar/Views/_history.tpl
        [19] => system/Debug/Toolbar/Views/_logs.tpl
        [20] => system/Debug/Toolbar/Views/_routes.tpl
        [21] => system/Debug/Toolbar/Views/toolbar.css
        [22] => system/Debug/Toolbar/Views/toolbar.js
        [23] => writable/cache/index.html
        [24] => writable/logs/index.html
        [25] => writable/session/index.html
        [26] => writable/uploads/index.html
    )
     




    PHP files require manual insertion : 15

    Array
    (
        [0] => 6 ==> app/Views/errors/cli/error_exception.php
        [1] => 3 ==> app/Views/errors/html/error_404.php
        [2] => 69 ==> app/Views/errors/html/error_exception.php
        [3] => 2 ==> system/Autoloader/Autoloader.php
        [4] => 2 ==> system/Helpers/text_helper.php
        [5] => 2 ==> system/Typography/Typography.php
        [6] => 7 ==> system/View/Parser.php
        [7] => 2 ==> system/Commands/Database/CreateMigration.php
        [8] => 2 ==> system/Commands/Sessions/CreateMigration.php
        [9] => 2 ==> system/Log/Handlers/FileHandler.php
        [10] => 7 ==> system/Pager/Views/default_full.php
        [11] => 4 ==> system/Validation/Views/list.php
        [12] => 5 ==> system/Commands/Sessions/Views/migration.tpl.php
        [13] => 54 ==> system/Debug/Toolbar/Views/toolbar.tpl.php
        [14] => 2 ==> system/Debug/Toolbar/Views/toolbarloader.js.php
    )
     




    Inserted Strict_types=1 into: 300 PHP files

    Array
    (
        [0] => app/Common.php
        [1] => app/Config/App.php
        [2] => app/Config/Autoload.php
        [3] => app/Config/Cache.php
        [4] => app/Config/Constants.php
        [5] => app/Config/ContentSecurityPolicy.php
        [6] => app/Config/Database.php
        [7] => app/Config/DocTypes.php
        [8] => app/Config/Email.php
        [9] => app/Config/Encryption.php
        [10] => app/Config/Events.php
        [11] => app/Config/Exceptions.php
        [12] => app/Config/Filters.php
        [13] => app/Config/ForeignCharacters.php
        [14] => app/Config/Format.php
        [15] => app/Config/Honeypot.php
        [16] => app/Config/Images.php
        [17] => app/Config/Logger.php
        [18] => app/Config/Migrations.php
        [19] => app/Config/Mimes.php
        [20] => app/Config/Modules.php
        [21] => app/Config/Pager.php
        [22] => app/Config/Paths.php
        [23] => app/Config/Routes.php
        [24] => app/Config/Services.php
        [25] => app/Config/Toolbar.php
        [26] => app/Config/UserAgents.php
        [27] => app/Config/Validation.php
        [28] => app/Config/View.php
        [29] => app/Controllers/BaseController.php
        [30] => app/Controllers/Home.php
        [31] => app/Config/Boot/development.php
        [32] => app/Config/Boot/production.php
        [33] => app/Config/Boot/testing.php
        [34] => app/Views/errors/cli/error_404.php
        [35] => app/Views/errors/cli/production.php
        [36] => public_html/index-DEBUG.php
        [37] => public_html/index.php
        [38] => public_html/zzz-index-DEBUG.php
        [39] => system/CodeIgniter.php
        [40] => system/Common.php
        [41] => system/ComposerScripts.php
        [42] => system/Controller.php
        [43] => system/Entity.php
        [44] => system/Model.php
        [45] => system/bootstrap.php
        [46] => system/API/ResponseTrait.php
        [47] => system/Autoloader/FileLocator.php
        [48] => system/CLI/BaseCommand.php
        [49] => system/CLI/CLI.php
        [50] => system/CLI/CommandRunner.php
        [51] => system/CLI/Console.php
        [52] => system/Cache/CacheFactory.php
        [53] => system/Cache/CacheInterface.php
        [54] => system/Commands/Help.php
        [55] => system/Commands/ListCommands.php
        [56] => system/Config/AutoloadConfig.php
        [57] => system/Config/BaseConfig.php
        [58] => system/Config/BaseService.php
        [59] => system/Config/Config.php
        [60] => system/Config/DotEnv.php
        [61] => system/Config/ForeignCharacters.php
        [62] => system/Config/Routes.php
        [63] => system/Config/Services.php
        [64] => system/Config/View.php
        [65] => system/Database/BaseBuilder.php
        [66] => system/Database/BaseConnection.php
        [67] => system/Database/BasePreparedQuery.php
        [68] => system/Database/BaseResult.php
        [69] => system/Database/BaseUtils.php
        [70] => system/Database/Config.php
        [71] => system/Database/ConnectionInterface.php
        [72] => system/Database/Database.php
        [73] => system/Database/Forge.php
        [74] => system/Database/Migration.php
        [75] => system/Database/MigrationRunner.php
        [76] => system/Database/PreparedQueryInterface.php
        [77] => system/Database/Query.php
        [78] => system/Database/QueryInterface.php
        [79] => system/Database/ResultInterface.php
        [80] => system/Database/Seeder.php
        [81] => system/Debug/Exceptions.php
        [82] => system/Debug/Iterator.php
        [83] => system/Debug/Timer.php
        [84] => system/Debug/Toolbar.php
        [85] => system/Email/Email.php
        [86] => system/Encryption/EncrypterInterface.php
        [87] => system/Encryption/Encryption.php
        [88] => system/Events/Events.php
        [89] => system/Exceptions/AlertError.php
        [90] => system/Exceptions/CastException.php
        [91] => system/Exceptions/ConfigException.php
        [92] => system/Exceptions/CriticalError.php
        [93] => system/Exceptions/DownloadException.php
        [94] => system/Exceptions/EmergencyError.php
        [95] => system/Exceptions/ExceptionInterface.php
        [96] => system/Exceptions/FrameworkException.php
        [97] => system/Exceptions/ModelException.php
        [98] => system/Exceptions/PageNotFoundException.php
        [99] => system/Files/File.php
        [100] => system/Filters/CSRF.php
        [101] => system/Filters/DebugToolbar.php
        [102] => system/Filters/FilterInterface.php
        [103] => system/Filters/Filters.php
        [104] => system/Filters/Honeypot.php
        [105] => system/Format/FormatterInterface.php
        [106] => system/Format/JSONFormatter.php
        [107] => system/Format/XMLFormatter.php
        [108] => system/HTTP/CLIRequest.php
        [109] => system/HTTP/CURLRequest.php
        [110] => system/HTTP/ContentSecurityPolicy.php
        [111] => system/HTTP/DownloadResponse.php
        [112] => system/HTTP/Header.php
        [113] => system/HTTP/IncomingRequest.php
        [114] => system/HTTP/Message.php
        [115] => system/HTTP/Negotiate.php
        [116] => system/HTTP/RedirectResponse.php
        [117] => system/HTTP/Request.php
        [118] => system/HTTP/RequestInterface.php
        [119] => system/HTTP/Response.php
        [120] => system/HTTP/ResponseInterface.php
        [121] => system/HTTP/URI.php
        [122] => system/HTTP/UserAgent.php
        [123] => system/Helpers/array_helper.php
        [124] => system/Helpers/cookie_helper.php
        [125] => system/Helpers/date_helper.php
        [126] => system/Helpers/filesystem_helper.php
        [127] => system/Helpers/form_helper.php
        [128] => system/Helpers/html_helper.php
        [129] => system/Helpers/inflector_helper.php
        [130] => system/Helpers/number_helper.php
        [131] => system/Helpers/security_helper.php
        [132] => system/Helpers/url_helper.php
        [133] => system/Helpers/xml_helper.php
        [134] => system/Honeypot/Honeypot.php
        [135] => system/I18n/Time.php
        [136] => system/I18n/TimeDifference.php
        [137] => system/Images/Image.php
        [138] => system/Images/ImageHandlerInterface.php
        [139] => system/Language/Language.php
        [140] => system/Log/Logger.php
        [141] => system/Pager/Pager.php
        [142] => system/Pager/PagerInterface.php
        [143] => system/Pager/PagerRenderer.php
        [144] => system/RESTful/ResourceController.php
        [145] => system/RESTful/ResourcePresenter.php
        [146] => system/Router/RouteCollection.php
        [147] => system/Router/RouteCollectionInterface.php
        [148] => system/Router/Router.php
        [149] => system/Router/RouterInterface.php
        [150] => system/Security/Security.php
        [151] => system/Session/Session.php
        [152] => system/Session/SessionInterface.php
        [153] => system/Test/CIDatabaseTestCase.php
        [154] => system/Test/CIUnitTestCase.php
        [155] => system/Test/ControllerResponse.php
        [156] => system/Test/ControllerTester.php
        [157] => system/Test/DOMParser.php
        [158] => system/Test/FeatureResponse.php
        [159] => system/Test/FeatureTestCase.php
        [160] => system/Test/ReflectionHelper.php
        [161] => system/Throttle/Throttler.php
        [162] => system/Throttle/ThrottlerInterface.php
        [163] => system/Validation/CreditCardRules.php
        [164] => system/Validation/FileRules.php
        [165] => system/Validation/FormatRules.php
        [166] => system/Validation/Rules.php
        [167] => system/Validation/Validation.php
        [168] => system/Validation/ValidationInterface.php
        [169] => system/View/Cell.php
        [170] => system/View/Filters.php
        [171] => system/View/Plugins.php
        [172] => system/View/RendererInterface.php
        [173] => system/View/Table.php
        [174] => system/View/View.php
        [175] => system/CLI/Exceptions/CLIException.php
        [176] => system/Cache/Exceptions/CacheException.php
        [177] => system/Cache/Exceptions/ExceptionInterface.php
        [178] => system/Cache/Handlers/DummyHandler.php
        [179] => system/Cache/Handlers/FileHandler.php
        [180] => system/Cache/Handlers/MemcachedHandler.php
        [181] => system/Cache/Handlers/PredisHandler.php
        [182] => system/Cache/Handlers/RedisHandler.php
        [183] => system/Cache/Handlers/WincacheHandler.php
        [184] => system/Commands/Database/Migrate.php
        [185] => system/Commands/Database/MigrateRefresh.php
        [186] => system/Commands/Database/MigrateRollback.php
        [187] => system/Commands/Database/MigrateStatus.php
        [188] => system/Commands/Database/Seed.php
        [189] => system/Commands/Server/Serve.php
        [190] => system/Commands/Server/rewrite.php
        [191] => system/Commands/Utilities/Namespaces.php
        [192] => system/Commands/Utilities/Routes.php
        [193] => system/Database/Exceptions/DataException.php
        [194] => system/Database/Exceptions/DatabaseException.php
        [195] => system/Database/Exceptions/ExceptionInterface.php
        [196] => system/Database/MySQLi/Builder.php
        [197] => system/Database/MySQLi/Connection.php
        [198] => system/Database/MySQLi/Forge.php
        [199] => system/Database/MySQLi/PreparedQuery.php
        [200] => system/Database/MySQLi/Result.php
        [201] => system/Database/MySQLi/Utils.php
        [202] => system/Database/Postgre/Builder.php
        [203] => system/Database/Postgre/Connection.php
        [204] => system/Database/Postgre/Forge.php
        [205] => system/Database/Postgre/PreparedQuery.php
        [206] => system/Database/Postgre/Result.php
        [207] => system/Database/Postgre/Utils.php
        [208] => system/Database/SQLite3/Builder.php
        [209] => system/Database/SQLite3/Connection.php
        [210] => system/Database/SQLite3/Forge.php
        [211] => system/Database/SQLite3/PreparedQuery.php
        [212] => system/Database/SQLite3/Result.php
        [213] => system/Database/SQLite3/Table.php
        [214] => system/Database/SQLite3/Utils.php
        [215] => system/Encryption/Exceptions/EncryptionException.php
        [216] => system/Encryption/Handlers/BaseHandler.php
        [217] => system/Encryption/Handlers/OpenSSLHandler.php
        [218] => system/Files/Exceptions/FileException.php
        [219] => system/Files/Exceptions/FileNotFoundException.php
        [220] => system/Filters/Exceptions/FilterException.php
        [221] => system/Format/Exceptions/FormatException.php
        [222] => system/HTTP/Exceptions/HTTPException.php
        [223] => system/HTTP/Files/FileCollection.php
        [224] => system/HTTP/Files/UploadedFile.php
        [225] => system/HTTP/Files/UploadedFileInterface.php
        [226] => system/Honeypot/Exceptions/HoneypotException.php
        [227] => system/I18n/Exceptions/I18nException.php
        [228] => system/Images/Exceptions/ImageException.php
        [229] => system/Images/Handlers/BaseHandler.php
        [230] => system/Images/Handlers/GDHandler.php
        [231] => system/Images/Handlers/ImageMagickHandler.php
        [232] => system/Language/en/CLI.php
        [233] => system/Language/en/Cache.php
        [234] => system/Language/en/Cast.php
        [235] => system/Language/en/Core.php
        [236] => system/Language/en/Database.php
        [237] => system/Language/en/Email.php
        [238] => system/Language/en/Encryption.php
        [239] => system/Language/en/Entity.php
        [240] => system/Language/en/Files.php
        [241] => system/Language/en/Filters.php
        [242] => system/Language/en/Format.php
        [243] => system/Language/en/HTTP.php
        [244] => system/Language/en/Images.php
        [245] => system/Language/en/Language.php
        [246] => system/Language/en/Log.php
        [247] => system/Language/en/Migrations.php
        [248] => system/Language/en/Number.php
        [249] => system/Language/en/Pager.php
        [250] => system/Language/en/RESTful.php
        [251] => system/Language/en/Redirect.php
        [252] => system/Language/en/Router.php
        [253] => system/Language/en/Session.php
        [254] => system/Language/en/Time.php
        [255] => system/Language/en/Validation.php
        [256] => system/Language/en/View.php
        [257] => system/Log/Exceptions/LogException.php
        [258] => system/Log/Handlers/BaseHandler.php
        [259] => system/Log/Handlers/ChromeLoggerHandler.php
        [260] => system/Log/Handlers/HandlerInterface.php
        [261] => system/Pager/Exceptions/PagerException.php
        [262] => system/Pager/Views/default_head.php
        [263] => system/Pager/Views/default_simple.php
        [264] => system/Router/Exceptions/RedirectException.php
        [265] => system/Router/Exceptions/RouterException.php
        [266] => system/Security/Exceptions/SecurityException.php
        [267] => system/Session/Exceptions/SessionException.php
        [268] => system/Session/Handlers/ArrayHandler.php
        [269] => system/Session/Handlers/BaseHandler.php
        [270] => system/Session/Handlers/DatabaseHandler.php
        [271] => system/Session/Handlers/FileHandler.php
        [272] => system/Session/Handlers/MemcachedHandler.php
        [273] => system/Session/Handlers/RedisHandler.php
        [274] => system/Test/Filters/CITestStreamFilter.php
        [275] => system/ThirdParty/Kint/kint.php
        [276] => system/ThirdParty/ZendEscaper/Escaper.php
        [277] => system/Validation/Exceptions/ValidationException.php
        [278] => system/View/Exceptions/ViewException.php
        [279] => system/Debug/Toolbar/Collectors/BaseCollector.php
        [280] => system/Debug/Toolbar/Collectors/Config.php
        [281] => system/Debug/Toolbar/Collectors/Database.php
        [282] => system/Debug/Toolbar/Collectors/Events.php
        [283] => system/Debug/Toolbar/Collectors/Files.php
        [284] => system/Debug/Toolbar/Collectors/History.php
        [285] => system/Debug/Toolbar/Collectors/Logs.php
        [286] => system/Debug/Toolbar/Collectors/Routes.php
        [287] => system/Debug/Toolbar/Collectors/Timers.php
        [288] => system/Debug/Toolbar/Collectors/Views.php
        [289] => system/ThirdParty/PSR/Log/AbstractLogger.php
        [290] => system/ThirdParty/PSR/Log/InvalidArgumentException.php
        [291] => system/ThirdParty/PSR/Log/LogLevel.php
        [292] => system/ThirdParty/PSR/Log/LoggerAwareInterface.php
        [293] => system/ThirdParty/PSR/Log/LoggerAwareTrait.php
        [294] => system/ThirdParty/PSR/Log/LoggerInterface.php
        [295] => system/ThirdParty/PSR/Log/LoggerTrait.php
        [296] => system/ThirdParty/PSR/Log/NullLogger.php
        [297] => system/ThirdParty/ZendEscaper/Exception/ExceptionInterface.php
        [298] => system/ThirdParty/ZendEscaper/Exception/InvalidArgumentException.php
        [299] => system/ThirdParty/ZendEscaper/Exception/RuntimeException.php
    )
     

