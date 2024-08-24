@extends('layouts.bar')

@section('title', 'Cruise Listing Create')

@section('content')

    <!-- ===========Innerpage-wrapper============= -->
    <section>
        <div class="content cruise-add-details">
            <div class="in-content-wrapper">
                <div class="row no-gutters">

                    <div class="col">
                        <div class="heading-messages">
                            <h3>Cruise Listing</h3>
                        </div><!-- End heading-messages -->
                    </div><!-- End column -->
                    <div class="col-md-4">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Listing</a>
                            </div>
                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Create
                            </div>
                        </div><!-- end breadcrumb -->
                    </div><!-- End column -->

                </div><!-- end row -->

                <div class="box">

                    <div class="row">
                        <div class="col">
                            <div class="details-text">
                                <h4>Add Details</h4>
                            </div><!-- end details-text -->
                        </div><!-- End column -->
                    </div><!-- end row -->
                    <div class="cruise-listing-form">
                        <form class="text-center" method="POST" action="{{ route('listing-cruise.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect00" class="">Title:</label>
                                        <input type="text" class="form-control" name="name" required
                                            id="inputGroupSelect00">
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Country:</label>
                                            </div>
                                            <select class="form-select" name="country" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="United States">United States</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Paris">Paris</option>
                                                <option value="Dubai">Dubai</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect02" class="">City:</label>
                                        <input type="text" class="form-control" name="city" required
                                            id="inputGroupSelect02">
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect03" class="">Model:</label>
                                        <input type="text" class="form-control" name="model" required
                                            id="inputGroupSelect03">
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text"
                                                    for="inputGroupSelect04">Manufacturer:</label>
                                            </div>
                                            <select class="form-select" name="manufacturer" id="inputGroupSelect04">
                                                <option selected>Choose...</option>
                                                <option value="Regent Seven Seas Cruises">Regent Seven Seas Cruises</option>
                                                <option value="Royal Caribbean International">Royal Caribbean International
                                                </option>
                                                <option value="Saga Cruises">Saga Cruises</option>
                                                <option value="Seabourn Cruise Line">Seabourn Cruise Line</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect05">Year:</label>
                                            </div>
                                            <select class="form-select" name="year" id="inputGroupSelect05">
                                                <option selected>Choose...</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993" selected>1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                                <option value="1920">1920</option>
                                                <option value="1919">1919</option>
                                                <option value="1918">1918</option>
                                                <option value="1917">1917</option>
                                                <option value="1916">1916</option>
                                                <option value="1915">1915</option>
                                                <option value="1914">1914</option>
                                                <option value="1913">1913</option>
                                                <option value="1912">1912</option>
                                                <option value="1911">1911</option>
                                                <option value="1910">1910</option>
                                                <option value="1909">1909</option>
                                                <option value="1908">1908</option>
                                                <option value="1907">1907</option>
                                                <option value="1906">1906</option>
                                                <option value="1905">1905</option>
                                                <option value="1904">1904</option>
                                                <option value="1903">1903</option>
                                                <option value="1902">1902</option>
                                                <option value="1901">1901</option>
                                                <option value="1900">1900</option>

                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect06">Capacity:</label>
                                            </div>
                                            <select class="form-select" name="capacity" id="inputGroupSelect06">
                                                <option selected>Choose...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">Length:</label>
                                        <input type="text" class="form-control" name="length" required
                                            id="inputGroupSelect07">
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect08">Rent:</label>
                                            </div>
                                            <select class="form-select" name="rent" id="inputGroupSelect08">
                                                <option selected>Choose...</option>
                                                <option value="100" selected>100 $</option>
                                                <option value="200">200 $</option>
                                                <option value="300">300 $</option>
                                                <option value="350">350 $</option>
                                                <option value="400">400 $</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect09">Rent
                                                    Type:</label>
                                            </div>
                                            <select class="form-select" name="rent_type" id="inputGroupSelect09">
                                                <option selected>Choose...</option>
                                                <option value="Half Day" selected>Half Day</option>
                                                <option value="1 Day">1 Day</option>
                                                <option value="3 Day">3 Days</option>
                                                <option value="1 Week">1 Week</option>
                                                <option value="2 Weeks">2 Week</option>
                                                <option value="3 Weeks">3 Week</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->

                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect10" class="">Cabins:</label>
                                        <input type="text" class="form-control" name="cabins" required
                                            id="inputGroupSelect10">
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect11" class="">Crew:</label>
                                        <input type="text" class="form-control" name="crew" required
                                            id="inputGroupSelect11">
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end row -->

                            <div action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <div class="dz-message needsclick">
                                    <p>
                                        Drop files here or click to upload.
                                    </p>
                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are
                                        <strong>not</strong> actually uploaded.)</span>
                                </div>

                            </div><!-- end dropzone -->


                            <div class="form-group">
                                <textarea class="form-control textarea text-start p-3" name="features" id="exampleFormControlTextarea1"
                                    rows="5" placeholder="Features"></textarea>
                            </div><!-- end form-group -->

                            <div class="form-group">
                                <textarea class="form-control textarea text-start p-3" name="details" id="exampleFormControlTextarea1"
                                    rows="5" placeholder="Details"></textarea>
                            </div><!-- end form-group -->
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <button class="btn" type="submit">Submit</button>
                                </li>
                                <li class="list-inline-item">
                                    <button class="btn">Cancel</button>
                                </li>
                            </ul>
                        </form>
                    </div><!-- end cruise-listing-form -->
                </div><!-- end box -->
            </div><!-- end in-content-wrapper -->
        </div><!-- end cruise-add-details -->
    </section>
    <!-- ===========End Innerpage-wrapper============= -->

    </div><!-- end wrapper -->














    <!-- Optional JavaScript, Not optional it's need too -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendors/admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/bootstrap-5.3.2.min.js') }}"></script>

    <script src="{{ asset('vendors/admin/vendors/dropzone-5.5.0/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/customscriptfile.js') }}"></script>

    <!-- Page Scripts Ends -->

@endsection
