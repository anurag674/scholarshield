<?php

if(!isset($_SERVER['HTTP_X_PJAX'])){

    $content = basename($_SERVER['SCRIPT_NAME']);

    $_SERVER['HTTP_X_PJAX'] = true;
    include 'stilearn.base.template.php';
    die();
}

?>
                    <!-- FORM ELEMENTS
                    ================================================== -->
                    <!-- TYPEAHEAD.JS -->
                    <div id="panel-typeahead" class="panel panel-default sortable-widget-item">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <button data-refresh="#panel-typeahead" title="refresh" class="btn-panel">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button data-expand="#panel-typeahead" title="expand" class="btn-panel">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button data-collapse="#panel-typeahead" title="collapse" class="btn-panel">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <button data-close="#panel-typeahead" title="close" class="btn-panel">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div><!-- /panel-actions -->
                            <h3 class="panel-title">Typeahead AutoComplete</h3>
                        </div><!-- /panel-heading -->

                        <div class="panel-body">
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="typeahead-local">Single Dataset <em>(Local)</em></label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="glyphicon glyphicon-user"></i></span>
                                            <input type="text" id="typeahead-local" class="form-control" placeholder="Look a team" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="typeahead-prefetches">Prefetches data</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <input type="text" id="typeahead-prefetches" class="form-control" placeholder="Countries" />
                                            <span class="input-group-addon text-silver"><i class="fa fa-flag-o"></i></span>
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="typeahead-customtemplate">Custom template</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <input type="text" id="typeahead-customtemplate" class="form-control" placeholder="Open source projects by Twitter" />
                                            <span class="input-group-btn">
                                                <a rel="tooltip" title="See all projects" target="_blank" href="http://twitter.github.io/" class="btn">
                                                    <i class="fa fa-twitter text-silver"></i>
                                                </a>
                                            </span>
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="typeahead-2datasets">Two datasets</label>
                                    <div class="col-sm-5">
                                        <input type="text" id="typeahead-2datasets" class="form-control" placeholder="NBA and NHL teams" />
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                            </form><!--/form-->
                        </div><!-- /panel-body -->
                    </div><!-- /panel-typeahead -->



                    <!-- MASK INPUT -->
                    <div id="panel-mask" class="panel panel-default sortable-widget-item">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <button data-refresh="#panel-mask" title="refresh" class="btn-panel">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button data-expand="#panel-mask" title="expand" class="btn-panel">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button data-collapse="#panel-mask" title="collapse" class="btn-panel">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <button data-close="#panel-mask" title="close" class="btn-panel">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div><!-- /panel-actions -->
                            <h3 class="panel-title">Input Mask</h3>
                        </div><!-- /panel-heading -->

                        <div class="panel-body">
                            <p>Make masks on form fields and html elements, use with simple data attribute <code>data-mask="mask-type"</code>. Available data mask <em>(To customize please read <a target="_blank" href="http://igorescobar.github.io/jQuery-Mask-Plugin/">Mask Plugin Docs</a>)</em>:</p>
                            <p><pre class="prettyprint">'date', 'time', 'date_time', 'zip', 'money', 'phone', 'phone_with_ddd', 'phone_us', 'cpf', 'ip_address', 'percent'</pre></p>
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mask-date">Date</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-calendar"></i></span>
                                            <input type="text" data-mask="date" id="mask-date" class="form-control" placeholder="dd/mm/yyyy" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mask-time">Time</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-clock-o"></i></span>
                                            <input type="text" data-mask="time" id="mask-time" class="form-control" placeholder="hh:mm:ss" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mask-datetime">Date and Time</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-calendar-o"></i></span>
                                            <input type="text" data-mask="date_time" id="mask-datetime" class="form-control" placeholder="dd/mm/yyyy hh:mm:ss" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mask-zip">Zip-Code</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-road"></i></span>
                                            <input type="text" data-mask="zip" id="mask-zip" class="form-control" placeholder="00000-000" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mask-money">Money</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-money"></i></span>
                                            <input type="text" data-mask="money" id="mask-money" class="form-control" placeholder="0,000.00" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mask-phone">Telephone</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-phone"></i></span>
                                            <input type="text" data-mask="phone" id="mask-phone" class="form-control" placeholder="0000-0000" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mask-phonecode">Telephone with Code</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-mobile-phone"></i></span>
                                            <input type="text" data-mask="phone_with_ddd" id="mask-phonecode" class="form-control" placeholder="(00) 0000-0000" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mask-usphone">US Telephone</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-phone"></i></span>
                                            <input type="text" data-mask="phone_us" id="mask-usphone" class="form-control" placeholder="(000) 000-0000" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mask-cpf">CPF</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-location-arrow"></i></span>
                                            <input type="text" data-mask="cpf" id="mask-cpf" class="form-control" placeholder="000.000.000-00" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mask-ip">IP Address</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-cloud"></i></span>
                                            <input type="text" data-mask="ip_address" id="mask-ip" class="form-control" placeholder="000.000.000.000" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="mask-percent">Percent</label>
                                    <div class="col-sm-5">
                                        <input type="text" data-mask="percent" id="mask-percent" class="form-control" placeholder="0,00%" />
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                            </form><!--/form-->
                        </div><!-- /panel-body -->
                    </div><!-- /panel-mask -->




                    <!-- TAGS INPUT -->
                    <div id="panel-tagsinput" class="panel panel-default sortable-widget-item">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <button data-refresh="#panel-tagsinput" title="refresh" class="btn-panel">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button data-expand="#panel-tagsinput" title="expand" class="btn-panel">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button data-collapse="#panel-tagsinput" title="collapse" class="btn-panel">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <button data-close="#panel-tagsinput" title="close" class="btn-panel">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div><!-- /panel-actions -->
                            <h3 class="panel-title">Tags Input</h3>
                        </div><!-- /panel-heading -->

                        <div class="panel-body">
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="tagsinput">Tags Input</label>
                                    <div class="col-sm-5">
                                        <input type="text" id="tagsinput" data-input="tags" class="form-control" value="php,ios,javascript,ruby,android,kindle" placeholder="Add input" />
                                        <p class="helper-block">Use with <code>.tags-input</code> or <code>data-input="tags"</code>, Very easy!</p>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                            </form><!--/form-->
                        </div><!-- /panel-body -->
                    </div><!-- /panel-tagsinput -->




                    <!-- MULTISELECT -->
                    <div id="panel-multiselect" class="panel panel-default sortable-widget-item">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <button data-refresh="#panel-multiselect" title="refresh" class="btn-panel">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button data-expand="#panel-multiselect" title="expand" class="btn-panel">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button data-collapse="#panel-multiselect" title="collapse" class="btn-panel">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <button data-close="#panel-multiselect" title="close" class="btn-panel">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div><!-- /panel-actions -->
                            <h3 class="panel-title">Multiselect</h3>
                        </div><!-- /panel-heading -->

                        <div class="panel-body">
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <select data-input='multiselect' multiple='multiple'>
                                            <option value="Courtney_Wilkins" selected>Courtney Wilkins</option>
                                            <option value="Rama_Obrien" selected>Rama Obrien</option>
                                            <option value="Ross_Mills">Ross Mills</option>
                                            <option value="Craig_Banks">Craig Banks</option>
                                            <option value="Rae_Franco">Rae Franco</option>
                                            <option value="Darrel_Carlson" selected>Darrel Carlson</option>
                                            <option value="Lynn_Mcbride">Lynn Mcbride</option>
                                            <option value="Noelle_Martinez">Noelle Martinez</option>
                                            <option value="Risa_Fletcher">Risa Fletcher</option>
                                            <option value="Dennis_Mejia" disabled>Dennis Mejia</option>
                                            <option value="Blaze_Eaton">Blaze Eaton</option>
                                            <option value="Theodore_Kelly">Theodore Kelly</option>
                                            <option value="Roth_Velazquez" selected>Roth Velazquez</option>
                                            <option value="Xena_Holden">Xena Holden</option>
                                            <option value="Deirdre_Rodriquez" disabled>Deirdre Rodriquez</option>
                                            <option value="Nita_Marquez">Nita Marquez</option>
                                            <option value="Amanda_Hicks" selected>Amanda Hicks</option>
                                            <option value="Alan_Ford">Alan Ford</option>
                                            <option value="Judith_Talley">Judith Talley</option>
                                            <option value="Kuame_Boyle">Kuame Boyle</option>
                                        </select>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                            </form><!--/form-->
                        </div><!-- /panel-body -->
                    </div><!-- /panel-multiselect -->




                    <!-- SELECT2 & SELECTBOXIT -->
                    <div id="panel-inpselect" class="panel panel-default sortable-widget-item">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <button data-refresh="#panel-inpselect" title="refresh" class="btn-panel">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button data-expand="#panel-inpselect" title="expand" class="btn-panel">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button data-collapse="#panel-inpselect" title="collapse" class="btn-panel">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <button data-close="#panel-inpselect" title="close" class="btn-panel">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div><!-- /panel-actions -->
                            <h3 class="panel-title">Replaced Select</h3>
                        </div><!-- /panel-heading -->

                        <div class="panel-body">
                            <h4>Select2 plugin</h4>
                            <p>Easy to use with data attribute <code>data-input="select2"</code> for Select mode and <code>data-input="select2-tags"</code> for Input Tags mode. Or you can use <code>.select2</code> and <code>.select2-tags</code>. If you use Select2 Tags you can define your available tags with <code>data-tags="your,tags,value"</code> (use <code>,</code> to separate your value), like demo below.</p>
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="select2">Select2</label>
                                    <div class="col-sm-5">
                                        <select style="width:100%" data-input="select2" placeholder="Select your time zone">
                                            <option value=""></option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                        <br><br>
                                        <select style="width:100%" data-input="select2" placeholder="Multiple select" multiple>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                        <br><br>
                                        <input style="width:100%" type="hidden" data-input="select2-tags" value="php,html3,css3" data-tags="php,ios,javascript,ruby,android,kindle,html5,css3,java" />
                                        <br><br>
                                        <select style="width:100%" data-input="select2" placeholder="Disable state" disabled>
                                            <option value=""></option>
                                        </select>
                                        <br><br>
                                        <select style="width:100%" data-input="select2" placeholder="Disable state" multiple disabled></select>
                                    </div><!--/cols-->
                                </div><!--/form-group-->
                            </form><!--/form-->

                            <h4>SelectBoxIt</h4>
                            <p>Just provides an alternative option to you to use form <code>select</code> with SelectBoxIt. Use with <code>data-input="selectboxit"</code> or <code>.selectboxit</code>.</p>
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">SelectBoxIt</label>
                                    <div class="col-sm-5">
                                        <select data-input="selectboxit" placeholder="Select city">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </select>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Cutom arrow</label>
                                    <div class="col-sm-5">
                                        <select data-input="selectboxit" placeholder="Select city" data-arrow="fa fa-location-arrow">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </select>
                                        <p class="help-block"><code>data-arrow</code> support with <em>Glyphicon </em> and <em>Font Awesome Icons</em></p>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Native mode</label>
                                    <div class="col-sm-5">
                                        <select data-input="selectboxit" placeholder="Select city" data-native>
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </select>
                                        <p class="help-block"><code>data-native</code> give you a native style</p>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Icon & Image</label>
                                    <div class="col-sm-5">
                                        <select data-input="selectboxit" multiple>
                                            <option value="Select a struff:" data-iconurl="http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-5/256/themes-icon.png">
                                                Select a struff
                                            </option>
                                            <option value="Twitter Bootstrap" data-iconurl="http://blog.getbootstrap.com/public/ico/apple-touch-icon-144-precomposed.png">
                                                Twitter Bootstrap
                                            </option>
                                            <option value="jQuery UI" data-iconurl="http://c747925.r25.cf2.rackcdn.com/blog/wp-content/uploads/2010/09/jquery-ui-logo.png">
                                                jQuery UI
                                            </option>
                                            <option value="jQuery Mobile" data-icon="glyphicon glyphicon-phone">
                                                jQuery Mobile
                                            </option>
                                            <option value="HTML5" data-icon="fa fa-html5">
                                                HTML5
                                            </option>
                                            <option value="CSS3" data-icon="fa fa-css3">
                                                CSS3
                                            </option>
                                        </select>
                                        <p class="help-block">Support with <em>Glyphicon </em> and <em>Font Awesome Icons</em></p>
                                    </div><!--/cols-->
                                </div><!--/form-group-->
                            </form><!--/form-->
                        </div><!-- /panel-body -->
                    </div><!-- /panel-inpselect -->




                    <!-- DATE RANGE PICKER -->
                    <div id="panel-daterangepicker" class="panel panel-default sortable-widget-item">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <button data-refresh="#panel-daterangepicker" title="refresh" class="btn-panel">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button data-expand="#panel-daterangepicker" title="expand" class="btn-panel">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button data-collapse="#panel-daterangepicker" title="collapse" class="btn-panel">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <button data-close="#panel-daterangepicker" title="close" class="btn-panel">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div><!-- /panel-actions -->
                            <h3 class="panel-title">Date Range Picker</h3>
                        </div><!-- /panel-heading -->

                        <div class="panel-body">
                            <p>Usa with attribute <code>data-input="daterangepicker"</code>, and support with <code>data-time</code> to enable time picker and <code>data-format</code> to format output date. More usage please <a target="_blank" href="http://www.dangrossman.info/2012/08/20/a-date-range-picker-for-twitter-bootstrap/">read the Docs</a>.</p>
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Basic Date Range Picker</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-calendar"></i></span>
                                            <input type="text" data-input="daterangepicker" class="form-control" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Date & Time Picker</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <input type="text" data-input="daterangepicker" data-time="true" data-format="MM/DD/YYYY h:mm A" class="form-control" />
                                            <span class="input-group-addon text-silver"><i class="fa fa-clock-o"></i></span>
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Pre-defined Ranges & Callback</label>
                                    <div class="col-sm-5">
                                        <button id="reportrange" class="btn btn-icon btn-inverse pull-right">
                                            <i class="fa fa-calendar"></i> <span>Please select Date Range</span>
                                        </button>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                            </form><!--/form-->
                        </div><!-- /panel-body -->
                    </div><!-- /panel-daterangepicker -->




                    <!-- DATE PICKER -->
                    <div id="panel-datepicker" class="panel panel-default sortable-widget-item">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <button data-refresh="#panel-datepicker" title="refresh" class="btn-panel">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button data-expand="#panel-datepicker" title="expand" class="btn-panel">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button data-collapse="#panel-datepicker" title="collapse" class="btn-panel">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <button data-close="#panel-datepicker" title="close" class="btn-panel">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div><!-- /panel-actions -->
                            <h3 class="panel-title">Date Picker</h3>
                        </div><!-- /panel-heading -->

                        <div class="panel-body">
                            <p>Basic usage with <code>data-input="datepicker"</code></p>
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Inline Datepicker</label>
                                    <div class="col-sm-5">
                                        <div data-input="datepicker"></div>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">As Input</label>
                                    <div class="col-sm-5">
                                        <input type="text" data-input="datepicker" class="form-control" />
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">As Component</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in date" data-input="datepicker" data-format="yyyy/mm/dd">
                                            <input type="text" class="form-control" />
                                            <span class="input-group-addon text-silver"><i class="fa fa-calendar"></i></span>
                                        </div><!-- /input-group-in -->
                                        <p class="helper-block">Required <code>.date</code></p>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Start view mode</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-calendar"></i></span>
                                            <input type="text" data-input="datepicker" data-view="2" class="form-control" />
                                        </div><!-- /input-group-in -->
                                        <p class="helper-block">Use with <code>data-view="value"</code> (posible value <code>(int) 0, 1 or 2</code>)</p>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                            </form><!--/form-->
                        </div><!-- /panel-body -->
                    </div><!-- /panel-datepicker -->




                    <!-- TIME PICKER -->
                    <div id="panel-timepicker" class="panel panel-default sortable-widget-item">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <button data-refresh="#panel-timepicker" title="refresh" class="btn-panel">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button data-expand="#panel-timepicker" title="expand" class="btn-panel">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button data-collapse="#panel-timepicker" title="collapse" class="btn-panel">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <button data-close="#panel-timepicker" title="close" class="btn-panel">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div><!-- /panel-actions -->
                            <h3 class="panel-title">Time Picker</h3>
                        </div><!-- /panel-heading -->

                        <div class="panel-body">
                            <p>Basic usage with <code>data-input="timepicker"</code></p>
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Basic Time Picker</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <span class="input-group-addon text-silver"><i class="fa fa-clock-o"></i></span>
                                            <input type="text" data-input="timepicker" class="form-control" />
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Dropdown</label>
                                    <div class="col-sm-5">
                                        <input type="text" data-input="timepicker" data-template="dropdown" class="form-control" />
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">As Component <small>(24hr)</small></label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <input type="text" class="form-control" data-input="timepicker" data-template="dropdown" data-show-meridian="false" />
                                            <span class="input-group-addon text-silver"><i class="fa fa-clock-o"></i></span>
                                        </div><!-- /input-group-in -->
                                        <p class="helper-block text-muted"><small>Disable Meridian</small></p>
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">With Datepicker</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <input type="text" data-input="datepicker" data-view="2" class="form-control" />
                                            <input type="hidden" id="fake-timepicker" class="form-control" />
                                            <span class="input-group-addon text-silver" data-input="timepicker" data-fake-input="#fake-timepicker" data-template="dropdown"><i class="fa fa-clock-o"></i></span>
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                            </form><!--/form-->
                        </div><!-- /panel-body -->
                    </div><!-- /panel-timepicker -->




                    <!-- COLOR PICKER -->
                    <div id="panel-colorpicker" class="panel panel-default sortable-widget-item">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <button data-refresh="#panel-colorpicker" title="refresh" class="btn-panel">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <button data-expand="#panel-colorpicker" title="expand" class="btn-panel">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button data-collapse="#panel-colorpicker" title="collapse" class="btn-panel">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <button data-close="#panel-colorpicker" title="close" class="btn-panel">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div><!-- /panel-actions -->
                            <h3 class="panel-title">Color Picker</h3>
                        </div><!-- /panel-heading -->

                        <div class="panel-body">
                            <p>Basic usage with <code>data-input="colorpicker"</code></p>
                            <form role="form" class="form-horizontal form-bordered">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Default <small>(Hue)</small></label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <input type="text" data-input="colorpicker" value="#13A89E" class="form-control" />
                                            <span class="input-group-addon text-silver"><i class="fa fa-tint"></i></span>
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Saturation <small>(Letter Case)</small></label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <input type="text" data-input="colorpicker" value="#5BB75B" data-control="saturation"  data-letterCase="uppercase" class="form-control" />
                                            <span class="input-group-addon text-silver"><i class="fa fa-tint"></i></span>
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Brightness</small></label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <input type="text" data-input="colorpicker" value="#FAA732" data-control="brightness" class="form-control" />
                                            <span class="input-group-addon text-silver"><i class="fa fa-tint"></i></span>
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Wheel</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <input type="text" data-input="colorpicker" data-control="wheel" value="#DA4F49" class="form-control" />
                                            <span class="input-group-addon text-silver"><i class="fa fa-tint"></i></span>
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Opacity</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-in">
                                            <input type="text" data-input="colorpicker" data-opacity=".5" value="#49AFCD" class="form-control"/>
                                            <span class="input-group-addon text-silver"><i class="fa fa-tint"></i></span>
                                        </div><!-- /input-group-in -->
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Inline</label>
                                    <div class="col-sm-5">
                                        <input type="text" data-input="colorpicker" data-inline="true" value="#394264" class="form-control" />
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Hidden Input</label>
                                    <div class="col-sm-5">
                                        <input type="hidden" data-input="colorpicker" value="#394264" data-position="top right" class="form-control" />
                                    </div><!--/cols-->
                                </div><!--/form-group-->

                            </form><!--/form-->
                        </div><!-- /panel-body -->
                    </div><!-- /panel-colorpicker -->