<?php DECLARE(STRICT_TYPES=1);  

https://belitsoft.com/php-development-services/php7-upgrading-from-php5-performance-security-reasons-and-case-studies


Why treat warnings as errors? They are just warnings!
A compiler warning signals a potentially serious problem in your code. The problems listed above are almost always fatal; others may or may not be, but you want compilation to fail even if it turns out to be a false alarm. Investigate each warning, find the root cause, and fix it. In the case of a false alarm, work around it — that is, use a different language feature or construct so that the warning is no longer triggered. If this proves to be very hard, disable that particular warning on a case by case basis.

You don't want to just leave warnings as warnings even if all of them are false alarms. It could be OK for very small projects where the total number of warnings emitted is less than 7. Anything more, and it's easy for a new warning to get lost in a flood of old familiar ones. Don't allow that. Just cause all your project to compile cleanly.

Note this applies to program development. If you are releasing your project to the world in the source form, then it might be a good idea not to supply -Werror or equivalent in your released build script. People might try to build your project with a different version of the compiler, or with a different compiler altogether, which may have a different set of warnings enabled. You may want their build to succeed. It is still a good idea to keep the warnings enabled, so that people who see warning messages could send you bug reports or patches.