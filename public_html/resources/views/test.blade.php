<!DOCTYPE html>
<html>
<head>
    <title>Meld je aan!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" />
    <style>
        /* For Firefox */
        input[type='number'] {
            -moz-appearance:textfield;
        }

        /* Webkit browsers like Safari and Chrome */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>
<body>

<div class="ui raised very padded text container segment">
    <form class="ui equal width form">
        <h4 class="ui dividing header">@lang('signup.title')</h4>
        <div class="fields">
            <div class="required field">
                <label>@lang('signup.firstname')</label>
                <input placeholder="@lang('signup.firstname')" type="text">
            </div>
            <div class="field">
                <label>@lang('signup.middlename')</label>
                <input placeholder="@lang('signup.middlename')" type="text">
            </div>
            <div class="required field">
                <label>@lang('signup.lastname')</label>
                <input placeholder="@lang('signup.lastname')" type="text">
            </div>
        </div>
        <div class="required field">
            <label>@lang('signup.gender')</label>
            <div class="ui selection dropdown">
                <input name="gender" type="hidden">
                <i class="dropdown icon"></i>
                <div class="default text">@lang('signup.gender')</div>
                <div class="menu">
                    <div class="item" data-value="male"><i class="blue male icon"></i>@lang('signup.male')</div>
                    <div class="item" data-value="female"><i class="pink female icon"></i>@lang('signup.female')</div>
                </div>
            </div>
        </div>
        <div class="four wide required field">
            <label>@lang('signup.age')</label>
            <input placeholder="@lang('signup.age')" type="number">
        </div>
        <div class="fields">
            <div class="required field">
                <label>@lang('signup.email')</label>
                <input placeholder="@lang('signup.email')" type="email">
            </div>
            <div class="required field">
                <label>@lang('signup.tel')</label>
                <input placeholder="@lang('signup.tel')" type="text">
            </div>
        </div>
        <div class="fields">
            <div class="required field">
                <label>@lang('signup.country')</label>
                <div class="ui fluid search selection dropdown">
                    <input name="country" type="hidden">
                    <i class="dropdown icon"></i>
                    <div class="default text">Select Country</div>
                    <div class="menu">
                        @foreach ($countries as $apps_country)
                            <div class="item" data-value="{{ $apps_country->country_code }}"><i class="{{ strtolower($apps_country->country_code) }} flag"></i>{{ $apps_country->country_name }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="required field">
                <label>@lang('signup.province')</label>
                <div class="ui fluid search selection dropdown">
                    <input name="country" type="hidden">
                    <i class="dropdown icon"></i>
                    <div class="default text">@lang('signup.province title')</div>
                    <div class="menu">
                        <div class="item" data-value="Drenthe">Drenthe</div>
                        <div class="item" value="Flevoland">Flevoland</div>
                        <div class="item" value="Friesland">Friesland</div>
                        <div class="item" value="Gelderland">Gelderland</div>
                        <div class="item" value="Groningen">Groningen</div>
                        <div class="item" value="Limburg">Limburg</div>
                        <div class="item" value="Noord-Brabant">Noord-Brabant</div>
                        <div class="item" value="Noord-Holland" selected>Noord-Holland</div>
                        <div class="item" value="Overijssel">Overijssel</div>
                        <div class="item" value="Utrecht">Utrecht</div>
                        <div class="item" value="Zeeland">Zeeland</div>
                        <div class="item" value="Zuid-Holland">Zuid-Holland</div>
                        <div class="item" value="Niet-Nederland">@lang('signup.province notnl')</div>
                    </div>
                </div>
            </div>
        </div>
            <div class="required eight wide field">
                <label>@lang('signup.area')</label>
                <input placeholder="@lang('signup.area')" type="text">
            </div>
        <div class="fields">
            <div class="required field">
                <label>@lang('signup.street')</label>
                <input placeholder="@lang('signup.street')" type="text">
            </div>
            <div class="required field">
                <label>@lang('signup.postal')</label>
                <input placeholder="@lang('signup.postal')" type="text">
            </div>
            <div class="required field">
                <label>@lang('signup.hnumber')</label>
                <input placeholder="@lang('signup.hnumber')" type="text">
            </div>
        </div>
        <div class="required four wide required field">
            <label>@lang('signup.njgroup')</label>
            <div class="ui selection dropdown">
                <input name="gender" type="hidden">
                <i class="dropdown icon"></i>
                <div class="default text">@lang('signup.time')</div>
                <div class="menu">
                    @foreach ($times as $njgroups)
                    <div class="item" data-value="{{ $njgroups }}">{{ $njgroups }}</div>
                        @endforeach
                </div>
            </div>
        </div>
        <div class="required four wide required field">
            <label>@lang('signup.child')</label>
            <div class="ui selection dropdown">
                <input name="gender" type="hidden">
                <i class="dropdown icon"></i>
                <div class="default text">@lang('signup.child title')</div>
                <div class="menu">
                    <div class="item" data-value="male"><i class="green checkmark icon"></i>@lang('signup.with')</div>
                    <div class="item" data-value="female"><i class="red remove icon"></i>@lang('signup.without')</div>
                </div>
            </div>
        </div>
        <div class="ui segment">
            <div class="grouped fields">
                <div class="required field">
                    <div class="ui checkbox">
                        <input name="terms" tabindex="0" class="hidden" type="checkbox">
                        <label>@lang('signup.16')</label>
                    </div>
                </div>
                <div class="required field">
                    <div class="ui checkbox">
                        <input name="terms" tabindex="0" class="hidden" type="checkbox">
                        <label>@lang('signup.swim')</label>
                    </div>
                </div>
                <div class="required field">
                    <div class="ui checkbox">
                        <input name="terms" tabindex="0" class="hidden" type="checkbox">
                        <label>@lang('signup.body')</label>
                    </div>
                </div>
                <div class="required field">
                    <div class="ui checkbox">
                        <input name="terms" tabindex="0" class="hidden" type="checkbox">
                        <label>@lang('signup.coldwater')</label>
                    </div>
                </div>
                <div class="required field">
                    <div class="ui checkbox">
                        <input name="terms" tabindex="0" class="hidden" type="checkbox">
                        <label>@lang('signup.risks')</label>
                    </div>
                </div>
                <div class="required field">
                    <div class="ui checkbox">
                        <input name="terms" tabindex="0" class="hidden" type="checkbox">
                        <label>@lang('signup.listen')</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui segment">
            {!! NoCaptcha::display() !!}
        </div>
        <div class="ui primary button">@lang('signup.button')</div>
    </form>
</div>
<script>
    $('.ui.checkbox')
        .checkbox()
    ;
    $('.ui.dropdown')
        .dropdown()
    ;
</script>
</body>
</html>