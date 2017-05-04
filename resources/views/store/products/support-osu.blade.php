{{--
    Copyright 2015-2017 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@if(!Auth::user())
<div class="row">
    <div class="col-md-6">
        You need to be <a href="#" class="js-user-link" title="{{ trans("users.anonymous.login_link") }}">logged in</a> to stuff!
    </div>
</div>
@else
<div id="js-store-support-osu-player" class="row js-store-support-osu-player store-support-osu">
    <div class="store-support-osu__player-icon">
        <center>
            <div style="background-image: url('');" class="avatar js-avatar"></div>
        </center>
    </div>
    <div class="store-column store-column--full-width store-support-osu__textual-info">
        <div class="store-row">
            <div>
                <span>
                    {!! Form::label('username', 'Text goes here maybe?????') !!}
                    {!! Form::text('item[extra_info]', '', ['id' => 'username', 'class' => 'form-control', 'placeholder' => 'Who???', 'autocomplete' => 'off']) !!}
                <span>
                <div>Currently have no supporter tag</div>
                <div>Choose your amount</div>
            </div>
            <div class="price-box">
                <p class="js-price price text-right">MONEHS</p>
                <div class="js-duration text-right">
                    1 month
                </div>
                <div class="js-price-per-month text-right"></div>
                <div class="js-discount text-right"></div>
            </div>
        </div>
        <div>
            <div class="js-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content">
                <div class="ui-slider-handle"></div>
            </div>
        </div>
    </div>
</div>
@endif
