<footer class="footer-wrapper">
    <div class="footer-wrapper__inside">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-copyright">
                        <p><span>© {{ now()->format('Y') }}</span><a href="#">BKK SMK MUTU</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-menu text-end">
                        <ul>
                            {{-- <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Team</a>
                            </li> --}}
                            <li>
                                <img src="{{ asset('admin_assets/img/stmik-tegal.png') }}" width="40" height="40"><a href="https://stmik-tegal.ac.id/"> STMIK TEGAL</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>