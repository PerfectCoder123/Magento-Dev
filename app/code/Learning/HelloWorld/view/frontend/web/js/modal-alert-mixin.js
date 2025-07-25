define([], function () {
    'use strict';

    console.log('✅ Mixin file loaded'); // Debug check

    return function (originalAlert) {
        return function (options) {
            console.log('🔥 Intercepted Alert:', options.content);
            return originalAlert(options);
        };
    };
});
