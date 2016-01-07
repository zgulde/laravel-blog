@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" href="/css/weather-map.css">
@stop

@section('bottom-script')
    <script type="text/javascript" src="/js/weather.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZVwMJ5Sk5XdlftXRSx2Ihnb6y_nBxcuw"></script>
@stop

@section('content')
    <div class="container">
        <div id="main-row" class="row">

            <h2>daily forecast</h2>
            <div class="col-md-9">
                <div id="map-area"></div>
                <div class="row" id="daily-forecast">
                    <div></div>
                </div>
            </div>

            <div class="col-md-3 options-area">
                <h3 class="forecast-option">Forecast Options</h3>

                <div id="forecast-options">

                    <h4 class="forecast-option">Days</h4>
                    <div id="days">
                        <select id="num-of-days">
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select> 
                    </div>

                    <h4 class="forecast-option">Detail</h4>
                    <div id="details">
                        <ul>
                            <li><input id="icon-checkbox" type="checkbox" checked><label for="icon-checkbox">Icon</label></li>
                            <li><input id="description-checkbox" type="checkbox"><label for="description-checkbox">Description</label></li>
                            <li><input id="low-high-checkbox" type="checkbox" checked><label for="low-high-checkbox">Low/High</label></li>
                            <li><input id="temp-avg-checkbox" type="checkbox"><label for="temp-avg-checkbox">Average Temperature</label></li>
                            <li><input id="humidity-checkbox" type="checkbox"><label for="humidity-checkbox">% Humidity</label></li>
                        </ul>
                    </div>

                    <h4 class="forecast-option">Set Location</h4>
                    <div id="location">
                        <input id="search-by-string-btn" type="radio" name="search-type" value="search" checked><label for="search-by-string-btn">Search</label>
                        <input id="search-by-marker-btn" type="radio" name="search-type" value="marker"><label for="search-by-marker-btn">Marker</label>
                        <button id="drop-marker-btn">Drop a Marker Here!</button>
                        <input id="location-search-input" value="San Antonio, TX">
                    </div>

                </div>

                <div id="location-results">
                    <h4 id="current-location"></h4>
                    <h5 id="current-lat-lng"></h5>
                    <select id="location-select"></select>
                </div>
                <button id="go-btn">Go!</button>
            </div>
        </div> <!--/.row-->
    </div> <!--/.container-->
@stop
