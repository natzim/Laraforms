var forms = {
    apiURL: '/api/',
    isSignedIn: false,

    init: function () {
        $('[data-auth="show"]').hide();

        this.authCheck();
    },

    authShowAndHide: function () {
        if (this.isSignedIn) {
            $('[data-auth="hide"]').hide();
            $('[data-auth="show"]').show();
        }
    },

    authCheck: function () {
        $.get(this.apiURL + 'account/authcheck', function (isSignedIn) {
            this.isSignedIn = isSignedIn;
            this.authShowAndHide();
        });
    }
};

forms.init();
