{{--
 * LaraClassified - Geo Classified Ads CMS
 * Copyright (c) BedigitCom. All Rights Reserved
 *
 * Website: http://www.bedigit.com
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from Codecanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
--}}
@extends('layouts.master')

@section('content')
	@include('common.spacer')
	<div class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 page-sidebar">
					@include('account.inc.sidebar')
				</div>
				<!--/.page-sidebar-->

				<div class="col-sm-9 page-content">

					@include('flash::message')

					@if (isset($errors) and $errors->any())
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h5><strong>{{ t('Oops ! An error has occurred. Please correct the red fields in the form') }}</strong></h5>
							<ul class="list list-check">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<div class="inner-box">
						<div class="row">
							<div class="col-md-5 col-xs-4 col-xxs-12">
								<h3 class="no-padding text-center-480 useradmin">
									<a href="">
										@if (!empty($gravatar))
											<img class="userImg" src="{{ $gravatar }}" alt="user">&nbsp;
										@else
											<img class="userImg" src="{{ url('images/user.jpg') }}" alt="user">
										@endif
										{{ $user->name }}
									</a>
								</h3>
							</div>
							<div class="col-md-7 col-xs-8 col-xxs-12">
								<div class="header-data text-center-xs">
									<!-- Traffic data -->
									<div class="hdata">
										<div class="mcol-left">
											<!-- Icon with red background -->
											<i class="fa fa-eye ln-shadow"></i>
										</div>
										<div class="mcol-right">
											<!-- Number of visitors -->
											<p>
												<a href="{{ lurl('account/my-posts') }}">
													{{ $countPostsVisits->total_visits or 0 }}
													<em>{{ trans_choice('global.count_visits', (isset($countPostsVisits) ? getPlural($countPostsVisits->total_visits) : getPlural(0))) }}</em>
												</a>
											</p>
										</div>
										<div class="clearfix"></div>
									</div>

									<!-- Ads data -->
									<div class="hdata">
										<div class="mcol-left">
											<!-- Icon with green background -->
											<i class="icon-th-thumb ln-shadow"></i>
										</div>
										<div class="mcol-right">
											<!-- Number of ads -->
											<p>
												<a href="{{ lurl('account/my-posts') }}">
													{{ $countPosts }}
													<em>{{ trans_choice('global.count_posts', getPlural($countPosts)) }}</em>
												</a>
											</p>
										</div>
										<div class="clearfix"></div>
									</div>

									<!-- Favorites data -->
									<div class="hdata">
										<div class="mcol-left">
											<!-- Icon with blue background -->
											<i class="fa fa-user ln-shadow"></i>
										</div>
										<div class="mcol-right">
											<!-- Number of favorites -->
											<p>
												<a href="{{ lurl('account/favourite') }}">
													{{ $countFavoritePosts }}
													<em>{{ trans_choice('global.count_favorites', getPlural($countFavoritePosts)) }} </em>
												</a>
											</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="inner-box">
						<div class="welcome-msg">
							<h3 class="page-sub-header2 clearfix no-padding">{{ t('Hello') }} {{ $user->name }} ! </h3>
							<span class="page-sub-header-sub small">
                                {{ t('You last logged in at') }}: {{ $user->last_login_at->format('d-m-Y H:i:s') }}
                            </span>
						</div>
						<div class="panel-group" id="accordion">
							<!-- USER -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#userPanel" data-toggle="collapse" data-parent="#accordion"> {{ t('My details') }} </a></h4>
								</div>
								<div class="panel-collapse collapse {{ (old('panel')=='' or old('panel')=='userPanel') ? 'in' : '' }}" id="userPanel">
									<div class="panel-body">
										<form name="details" class="form-horizontal" role="form" method="POST" action="{{ url()->current() }}">
											{!! csrf_field() !!}
											<input name="_method" type="hidden" value="PUT">
											<input name="panel" type="hidden" value="userPanel">

											<!-- gender -->
											<div class="form-group required <?php echo (isset($errors) and $errors->has('gender')) ? 'has-error' : ''; ?>">
												<label class="col-md-3 control-label">{{ t('Gender') }}</label>
												<div class="col-md-9">
													@if ($genders->count() > 0)
                                                        @foreach ($genders as $gender)
                                                            <label class="radio-inline" for="gender">
                                                                <input name="gender" id="gender-{{ $gender->tid }}" value="{{ $gender->tid }}"
                                                                       type="radio" {{ (old('gender', $user->gender_id)==$gender->tid) ? 'checked="checked"' : '' }}>
                                                                {{ $gender->name }}
                                                            </label>
                                                        @endforeach
													@endif
												</div>
											</div>
												
											<!-- name -->
											<div class="form-group required <?php echo (isset($errors) and $errors->has('name')) ? 'has-error' : ''; ?>">
												<label class="col-sm-3 control-label">{{ t('Name') }} <sup>*</sup></label>
												<div class="col-sm-9">
													<input name="name" type="text" class="form-control" placeholder="" value="{{ old('name', $user->name) }}">
												</div>
											</div>
											
											<!-- username -->
											<div class="form-group required <?php echo (isset($errors) and $errors->has('username')) ? 'has-error' : ''; ?>">
												<label class="col-sm-3 control-label" for="email">{{ t('Username') }} <sup>*</sup></label>
												<div class="col-sm-9">
													<div class="input-group">
														<span class="input-group-addon"><i class="icon-user"></i></span>
														<input id="username" name="username" type="text" class="form-control" placeholder="{{ t('Username') }}"
															   value="{{ old('username', $user->username) }}">
													</div>
												</div>
											</div>
												
											<!-- email -->
											<div class="form-group required <?php echo (isset($errors) and $errors->has('email')) ? 'has-error' : ''; ?>">
												<label class="col-sm-3 control-label">{{ t('Email') }} <sup>*</sup></label>
												<div class="col-sm-9">
													<div class="input-group">
														<span class="input-group-addon"><i class="icon-mail"></i></span>
														<input id="email" name="email" type="email" class="form-control" placeholder="{{ t('Email') }}" value="{{ old('email', $user->email) }}">
													</div>
												</div>
											</div>
                                                
                                            <!-- country -->
                                            <?php
                                            /*
											<div class="form-group required <?php echo (isset($errors) and $errors->has('country')) ? 'has-error' : ''; ?>">
												<label class="col-md-3 control-label" for="country">{{ t('Your Country') }} <sup>*</sup></label>
												<div class="col-md-9">
													<select name="country" class="form-control sselecter">
														<option value="0" {{ (!old('country') or old('country')==0) ? 'selected="selected"' : '' }}>
															{{ t('Select a country') }}
														</option>
														@foreach ($countries as $item)
															<option value="{{ $item->get('code') }}" {{ (old('country', $user->country_code)==$item->get('code')) ? 'selected="selected"' : '' }}>
																{{ $item->get('name') }}
															</option>
														@endforeach
													</select>
												</div>
											</div>
                                            */
                                            ?>
                                            <input name="country" type="hidden" value="{{ $user->country_code }}">
												
											<!-- phone -->
											<div class="form-group required <?php echo (isset($errors) and $errors->has('phone')) ? 'has-error' : ''; ?>">
												<label for="phone" class="col-sm-3 control-label">{{ t('Phone') }} <sup>*</sup></label>
												<div class="col-sm-6">
													<div class="input-group">
														<span id="phoneCountry" class="input-group-addon">{!! getPhoneIcon(old('country', $user->country_code)) !!}</span>
														<input id="phone" name="phone" type="text" class="form-control"
															   placeholder="" value="{{ phoneFormat(old('phone', $user->phone), old('country', $user->country_code)) }}">
													</div>
													<div class="checkbox">
														<label>
															<input name="phone_hidden" type="checkbox"
																   value="1" {{ (old('phone_hidden', $user->phone_hidden)=='1') ? 'checked="checked"' : '' }}>
															<small> {{ t('Hide the phone number on the published ads.') }}</small>
														</label>
													</div>
												</div>
											</div>
												
											<!-- user_type -->
											<div class="form-group required <?php echo (isset($errors) and $errors->has('user_type')) ? 'has-error' : ''; ?>">
												<label class="col-sm-3 control-label">{{ t('You are a') }} </label>
												<div class="col-sm-9">
													<select name="user_type" id="userType" class="form-control selecter">
														<option value="0"
																@if (old('user_type')=='' or old('user_type')==0)
																	selected="selected"
																@endif
														>
															{{ t('Select') }}
														</option>
														@foreach ($userTypes as $type)
															<option value="{{ $type->id }}"
																	@if (old('user_type', $user->user_type_id)==$type->id)
																		selected="selected"
																	@endif
															>
																{{ t($type->name) }}
															</option>
														@endforeach
													</select>
												</div>
											</div>

											<div class="form-group">
												<div class="col-sm-offset-3 col-sm-9"></div>
											</div>
											
											<!-- Button -->
											<div class="form-group">
												<div class="col-sm-offset-3 col-sm-9">
													<button type="submit" class="btn btn-primary">{{ t('Update') }}</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							<!-- SETTINGS -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#settingsPanel" data-toggle="collapse" data-parent="#accordion"> {{ t('Settings') }} </a></h4>
								</div>
								<div class="panel-collapse collapse {{ (old('panel')=='settingsPanel') ? 'in' : '' }}" id="settingsPanel">
									<div class="panel-body">
										<form name="settings" class="form-horizontal" role="form" method="POST" action="{{ lurl('account/settings') }}">
											{!! csrf_field() !!}
											<input name="_method" type="hidden" value="PUT">
											<input name="panel" type="hidden" value="settingsPanel">
											
											<!-- disable_comments -->
											<div class="form-group">
												<div class="col-sm-12">
													<div class="checkbox">
														<label>
															<input id="disable_comments" name="disable_comments" value="1" type="checkbox" {{ ($user->disable_comments==1) ? 'checked' : '' }}>
															{{ t('Disable comments on my ads') }}
														</label>
													</div>
												</div>
											</div>
											
											<!-- password -->
											<div class="form-group <?php echo (isset($errors) and $errors->has('password')) ? 'has-error' : ''; ?>">
												<label class="col-sm-3 control-label">{{ t('New Password') }}</label>
												<div class="col-sm-9">
													<input id="password" name="password" type="password" class="form-control" placeholder="{{ t('Password') }}">
												</div>
											</div>
											
											<!-- password_confirmation -->
											<div class="form-group <?php echo (isset($errors) and $errors->has('password')) ? 'has-error' : ''; ?>">
												<label class="col-sm-3 control-label">{{ t('Confirm Password') }}</label>
												<div class="col-sm-9">
													<input id="password_confirmation" name="password_confirmation" type="password"
														   class="form-control" placeholder="{{ t('Confirm Password') }}">
												</div>
											</div>
											
											<!-- Button -->
											<div class="form-group">
												<div class="col-sm-offset-3 col-sm-9">
													<button type="submit" class="btn btn-primary">{{ t('Update') }}</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
						<!--/.row-box End-->

					</div>
				</div>
				<!--/.page-content-->
			</div>
			<!--/.row-->
		</div>
		<!--/.container-->
	</div>
	<!-- /.main-container -->
@endsection

@section('after_scripts')
@endsection
