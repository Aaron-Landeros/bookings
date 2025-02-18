<!-- HEADER -->
<div class="container mt-5 pt-5">
    <div class="row mb-5 d-flex">
        <!-- PARTE IZQUIERDA -->
        <div class="col-8">
            <!-- PRIMERA PARTE -->
                    <div id="carouselExampleControls" class="carousel slide w-75" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/gray.avif" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/gray.avif" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/gray.avif" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <h4 class="card-title mt-4">Bussines Name</h4>
                    <p>Address</p>
                    <p>Business Type</p>


            <!-- SEGUNDA PARTE NAV Y TABS -->
            <ul class="nav nav-tabs w-75 mt-2 d-flex " id="myTab" role="tablist">
                <li class="nav-item col-4" role="presentation">
                    <button class="nav-link active w-100" id="services-tab" data-bs-toggle="tab"
                        data-bs-target="#services" type="button" role="tab" aria-controls="services"
                        aria-selected="true">Services</button>
                </li>
                <li class="nav-item col-4" role="presentation">
                    <button class="nav-link w-100" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                        type="button" role="tab" aria-controls="review" aria-selected="false">Reviews</button>
                </li>
                <li class="nav-item col-4" role="presentation">
                    <button class="nav-link w-100" id="media-tab" data-bs-toggle="tab" data-bs-target="#media"
                        type="button" role="tab" aria-controls="media" aria-selected="false">Media</button>
                </li>
            </ul>
            <div class="tab-content w-75" id="myTabContent">
                <!-- Services -->
                <div class="tab-pane fade show active" id="services" role="tabpanel" aria-labelledby="services-tab"> 
                        <table class="table">
                        <tbody>
                            <tr>
                            <th scope="row">Services</th>
                            <td></td>
                            <td class="text-end">00.00</td>
                            </tr>
                            <tr>
                            <th scope="row">Services</th>
                            <td></td>
                            <td class="text-end">00.00</td>
                            </tr>
                            <tr>
                            <th scope="row">Services</th>
                            <td></td>
                            <td class="text-end">00.00</td>
                            </tr>
                        </tbody>
                        </table>
                </div>
                <!-- Reviews -->
                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <table class="table">
                        <tbody>
                            <tr>
                            <th scope="row">Reviews</th>
                            <td></td>
                            <td class="text-end">00.00</td>
                            </tr>
                            <tr>
                            <th scope="row">Reviews</th>
                            <td></td>
                            <td class="text-end">00.00</td>
                            </tr>
                            <tr>
                            <th scope="row">Reviews</th>
                            <td></td>
                            <td class="text-end">00.00</td>
                            </tr>
                        </tbody>
                        </table>
                </div>
                <!-- Media -->
                <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="media-tab">
                    <table class="table">
                        <tbody>
                            <tr>
                            <th scope="row">Media</th>
                            <td></td>
                            <td class="text-end">00.00</td>
                            </tr>
                            <tr>
                            <th scope="row">Media</th>
                            <td></td>
                            <td class="text-end">00.00</td>
                            </tr>
                            <tr>
                            <th scope="row">Media</th>
                            <td></td>
                            <td class="text-end">00.00</td>
                            </tr>
                        </tbody>
                        </table>
                </div>
            </div>
        </div>

        <!-- PARTE DERECHA -->
        <div class="col-4">
            <div class="form-cont p-5">
                <h5 class="text-center mb-5">Make Appointment</h5>
                <label class="w-25" for="form-select">Service:</label>
                <select class="w-50 select-form" name="Service" id="form-select">
                    <option value="">Select</option>
                    <option value="">Services</option>
                    <option value="">Barber Shop</option>
                    <option value="">Hair Salon</option>
                    <option value="">Massage</option>
                </select>
                <hr class="my-4">
                <label class="w-25" for="date-form">Date:</label>
                <input class="w-50 py-1" type="date" name="date" id="date-form">
                <hr class="my-4">
                <label class="w-25" for="time-form">Time:</label>
                <input class="w-50 py-1" type="time" name="time" id="time-form">
                <br>
                <div class="row">
                    <div class="col text-center">
                        <button type="button" class="btn btn-info mt-5 text-light w-75">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
