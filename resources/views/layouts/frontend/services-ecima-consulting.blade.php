<div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
    <div class="sidebar sticky-bar ms-lg-4 ">


        <!-- CATAGORIES -->
        <div class="widget mt-4 pt-2">
            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">
                Transformation & Organisation</h6>
            <ul class="list-unstyled mt-4 mb-0 catagories">
                <li class="d-flex justify-content-between"><a href="javascript:void(0)"
                                                              class="title text-dark">Etude et
                        cadrage</a></li>
                <li class="d-flex justify-content-between mt-2"><a
                        href="{{ route('pilotage_projet_page',[app()->getLocale()]) }}"
                        class="title text-dark">Pilotage de
                        projets</a> {{--<span>09</span>--}}</li>
            </ul>
        </div>
        <!-- CATAGORIES -->

        <!-- CATAGORIES -->
        <div class="widget mt-4 pt-2">
            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">
                ORGANISATION ET PROCESSUS</h6>
            <ul class="list-unstyled mt-4 mb-0 catagories">
                <li class="d-flex justify-content-between"><a href="{{ route('transformer_votre_entreprise',[app()->getLocale()]) }}"
                                                              class="title text-dark">Transformer votre
                        organisation</a></li>
                <li class="d-flex justify-content-between mt-2"><a href="{{ route('excellence_operationelle',[app()->getLocale()]) }}"
                                                                   class="title text-dark">Excellence
                        operationelle</a> {{--<span>09</span>--}}</li>
            </ul>
        </div>
        <!-- CATAGORIES -->

        <!-- CATAGORIES -->
        <div class="widget mt-4 pt-2">
            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">DATA
                INTELLIGENCE</h6>
            <ul class="list-unstyled mt-4 mb-0 catagories">
                <li class="d-flex justify-content-between"><a href="javascript:void(0)"
                                                              class="title text-dark">Business
                        Intelligence</a></li>
                <li class="d-flex justify-content-between mt-2"><a href="javascript:void(0)"
                                                                   class="title text-dark">Master data
                        management</a> {{--<span>09</span>--}}</li>
                <li class="d-flex justify-content-between mt-2"><a href="javascript:void(0)"
                                                                   class="title text-dark">Data Quality
                        Management</a> {{--<span>09</span>--}}</li>
            </ul>
        </div>
        <!-- CATAGORIES -->

        <!-- CATAGORIES -->
        <div class="widget mt-4 pt-2">
            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">
                ARCHITECTURE D’ENTREPRISE</h6>
            <ul class="list-unstyled mt-4 mb-0 catagories">
                <li class="d-flex justify-content-between"><a href="javascript:void(0)"
                                                              class="title text-dark">Schema directeur
                        SI</a></li>
                <li class="d-flex justify-content-between mt-2"><a href="javascript:void(0)"
                                                                   class="title text-dark">Audit des
                        systèmes d’information</a> {{--<span>09</span>--}}</li>
            </ul>
        </div>
        <!-- CATAGORIES -->

        <!-- CATAGORIES -->
        {{--<div class="widget mt-4 pt-2">
            <h6 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">
                FORMATION</h6>
            <ul class="list-unstyled mt-4 mb-0 catagories">
                <li class="d-flex justify-content-between"><a href="javascript:void(0)"
                                                              class="title text-dark">Notre offre</a>
                </li>
                <li class="d-flex justify-content-between mt-2"><a href="javascript:void(0)"
                                                                   class="title text-dark">Notre
                        catalogue</a> --}}{{--<span>09</span>--}}{{--</li>
            </ul>
        </div>--}}
        <!-- CATAGORIES -->
        <br>
        <br>

        <!-- RECENT POST -->
        <div class="widget mt-4 pt-2 bg-light">
            <div class="container">
                <h5 class="widget-title font-weight-bold pt-2 pb-2 bg-light rounded text-center">BESOIN
                    DE CETTE OFFRE ?</h5>
                <h6>Appelez-nous au : <strong> +237 694 926 164 </strong> <br> ou contactez-nous</h6>
                <div class="custom-form">
                    <form method="post"
                          action="{{ route('admin_store_message_page',[app()->getLocale()]) }}"
                          name="myForm">
                        @csrf
                        <p id="error-msg" class="mb-0"></p>
                        <div id="simple-msg"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">

                                    <input name="name" id="name" type="text" class="form-control"
                                           placeholder="Noms :">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">

                                    <input name="email" id="email" type="email" class="form-control"
                                           placeholder="Email :" required>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-12">
                                <div class="mb-3">

                                    <input name="phone" id="phone" type="text" class="form-control"
                                           placeholder="Telephone :" required>
                                </div>
                            </div><!--end col-->

                            <div class="col-12">
                                <div class="mb-3">

                                    <input name="subject" id="subject" class="form-control"
                                           placeholder="Sujet :" value="Transformation & Organisation">
                                </div>
                            </div><!--end col-->

                            <div class="col-12">
                                <div class="mb-3">

                                                <textarea name="contentt" id="comments" rows="4" class="form-control"
                                                          placeholder="Message :" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" id="submit" name="send"
                                            class="btn btn-primary">Envoyez
                                        votre message
                                    </button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div><!--end custom-form-->
            </div>

        </div>
        <!-- RECENT POST -->


    </div>
</div><!--end col-->

