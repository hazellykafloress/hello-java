@extends('layouts/contentNavbarLayout')

@section('title', 'User Accounts - Create')

@section('content')
    <div class="row">
        <div class="col-xl">
            <form method="POST" action="{{ route('accounts.update', ['account' => $user->id]) }}">
                @method('PUT')
                @csrf
                <div class="d-flex justify-content-end mb-3">
                    <button type="submit" class="btn btn-primary d-flex gap-1">
                        <i class="bx bx-pencil"></i>
                        Update
                    </button>
                </div>
                <div class="card mb-6">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Account Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-6">
                            <label class="form-label" for="name">Full Name <small class="text-danger">*</small> </label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="John Doe"
                                value="{{ old('name') ?? $user->name }}" />
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="email">Email <small class="text-danger">*</small></label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="email" class="form-control" name="email"
                                    placeholder="john.doe@gmail.com" aria-label="john.doe" aria-describedby="email2"
                                    value="{{ old('email') ?? $user->email }}" />
                            </div>
                            <div class="form-text"> You can use letters, numbers & periods </div>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="*****" />
                            <div class="form-text"> Password must be 8 characters length </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="password_confirmation">Confirm Password </label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="*****" />
                            <div class="form-text"> Password must be 8 characters length </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-6">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Establishment Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-6">
                            <label class="form-label" for="establishment_name">Name <small
                                    class="text-danger">*</small></label>
                            <input type="text" class="form-control" id="establishment_name" name="establishment_name"
                                placeholder="Starbucks"
                                value="{{ old('establishment_name') ?? $user->establishment?->name }}" />
                            @error('establishment_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="establishment_description">Description <small
                                    class="text-danger">*</small></label>
                            <textarea id="establishment_description" class="form-control" name="establishment_description"
                                placeholder="Short Information About the establishmment">{{ old('establishment_description') ?? $user->establishment?->description }}</textarea>
                            @error('establishment_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="establishment_address">Address <small
                                    class="text-danger">*</small></label>
                            <textarea id="establishment_address" class="form-control" name="establishment_address"
                                placeholder="Malitbog, Southern Leyte">{{ old('establishment_address') ?? $user->establishment?->address }}</textarea>
                            @error('establishment_address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="establishment_geolocation_longitude">Geolocation
                                Longitude</label>
                            <input type="number" class="form-control" id="establishment_geolocation_longitude"
                                name="establishment_geolocation_longitude" placeholder="125.00094211920187"
                                value="{{ old('establishment_geolocation_longitude') ?? $user->establishment?->geolocation_longitude }}" />
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="establishment_geolocation_latitude">Geolocation
                                Latitude</label>
                            <input type="number" class="form-control" id="establishment_geolocation_latitude"
                                placeholder="10.158163827849396"
                                value="{{ old('establishment_geolocation_latitude') ?? $user->establishment?->geolocation_latitude }}" />
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="establishment_contact_number">Contact Number <small
                                    class="text-danger">*</small></label>
                            <input type="text" class="form-control" id="establishment_contact_number"
                                placeholder="+6391234567890"
                                value="{{ old('establishment_contact_number') ?? $user->establishment?->contact_number }}" />
                            @error('establishment_contact_number')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="establishment_mode_of_access">Mode Of Access <small
                                    class="text-danger">*</small></label>
                            <select class="select_mode form-select" name="establishment_mode_of_access[]"
                                multiple="multiple">
                                <option value="Car Access" @if (in_array('Car Access', old('establishment_mode_of_access') ?? explode(',', $user->establishment?->mode_of_access))) selected @endif>Car Access
                                </option>
                                <option value="Foot Access" @if (in_array('Foot Access', old('establishment_mode_of_access') ?? explode(',', $user->establishment?->mode_of_access))) selected @endif>Foot Access
                                </option>
                            </select>
                            <div class="form-text"> Hold ctrl key or command to select multiple items </div>
                            @error('establishment_mode_of_access')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="establishment_type_of_business">Type of Business <small
                                    class="text-danger">*</small></label>
                            <select class="select_mode form-select" name="establishment_type_of_business">
                                <option value="" disabled selected>Select one</option>
                                @foreach ($businessTypes as $businessType)
                                    <option value="{{ $businessType->id }}"
                                        @if (
                                            $businessType->id == old('establishment_type_of_business') ||
                                                $businessType->id == $user->establishment?->business_type_id) selected @endif>{{ $businessType->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('establishment_type_of_business')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('jsScripts')
    <script>
        $(document).ready(function() {
            $('.select_mode').select2();
        });
    </script>
@endsection