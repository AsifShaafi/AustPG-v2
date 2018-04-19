{{--adding the main template--}}
@extends("layouts.main")

{{--adding the main body segment of the page here--}}
@section("container")

    <div class="row">
        <div class="col-md-12">

            <div class="jumbotron well text-center">
                <h1>Up Coming Contest</h1>
                <p></p>
            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>
                        <h3>#
                            <small></small>
                        </h3>
                    </th>
                    <th>
                        <h3>Contest Name
                            <small></small>
                        </h3>
                    </th>
                    <th>
                        <h3>Date & Time
                            <small></small>
                        </h3>
                    </th>
                    <th>
                        <h3>Hosted By
                            <small></small>
                        </h3>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <a href="{{route("contestShow", ['id' => 1])}}">Intra Aust Warm Up</a>
                    </td>
                    <td>
                        10:30 AM 01/04/2017
                    </td>
                    <td>
                        <a href="">Sifat Ahmed</a>

                    </td>
                </tr>

                <tr>
                    <td>
                        2
                    </td>
                    <td>
                        <a href="">ICPC Practice</a>

                    </td>
                    <td>
                        10:30 AM 05/04/2017
                    </td>
                    <td>
                        <a href="">Asif Imtiaz Shaafi</a>

                    </td>
                </tr>

                <tr>
                    <td>
                        3
                    </td>
                    <td>

                        <a href="">Beginers Practise</a>

                    </td>
                    <td>
                        10:30 AM 09/04/2017
                    </td>
                    <td>
                        <a href="">Sayef Reyadh Khan</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <a href="">Intra Aust Warm Up</a>
                    </td>
                    <td>
                        10:30 AM 01/04/2017
                    </td>
                    <td>
                        <a href="">Sifat Ahmed</a>

                    </td>
                </tr>

                <tr>
                    <td>
                        2
                    </td>
                    <td>
                        <a href="">ICPC Practice</a>

                    </td>
                    <td>
                        10:30 AM 05/04/2017
                    </td>
                    <td>
                        <a href="">Asif Imtiaz Shaafi</a>

                    </td>
                </tr>

                <tr>
                    <td>
                        3
                    </td>
                    <td>

                        <a href="">Beginers Practise</a>

                    </td>
                    <td>
                        10:30 AM 09/04/2017
                    </td>
                    <td>
                        <a href="">Sayef Reyadh Khan</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <a href="">Intra Aust Warm Up</a>
                    </td>
                    <td>
                        10:30 AM 01/04/2017
                    </td>
                    <td>
                        <a herf="">Sifat Ahmed</a>

                    </td>
                </tr>

                <tr>
                    <td>
                        2
                    </td>
                    <td>
                        <a herf="">ICPC Practice</a>

                    </td>
                    <td>
                        10:30 AM 05/04/2017
                    </td>
                    <td>
                        <a herf="">Asif Imtiaz Shaafi</a>

                    </td>
                </tr>

                <tr>
                    <td>
                        3
                    </td>
                    <td>

                        <a herf="">Beginers Practise</a>

                    </td>
                    <td>
                        10:30 AM 09/04/2017
                    </td>
                    <td>
                        <a herf="">Sayef Reyadh Khan</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <a herf="">Intra Aust Warm Up</a>
                    </td>
                    <td>
                        10:30 AM 01/04/2017
                    </td>
                    <td>
                        <a herf="">Sifat Ahmed</a>

                    </td>
                </tr>

                <tr>
                    <td>
                        2
                    </td>
                    <td>
                        <a herf="">ICPC Practice</a>

                    </td>
                    <td>
                        10:30 AM 05/04/2017
                    </td>
                    <td>
                        <a herf="">Asif Imtiaz Shaafi</a>

                    </td>
                </tr>

                <tr>
                    <td>
                        3
                    </td>
                    <td>

                        <a herf="">Beginers Practise</a>

                    </td>
                    <td>
                        10:30 AM 09/04/2017
                    </td>
                    <td>
                        <a herf="">Sayef Reyadh Khan</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <a herf="">Intra Aust Warm Up</a>
                    </td>
                    <td>
                        10:30 AM 01/04/2017
                    </td>
                    <td>
                        <a herf="">Sifat Ahmed</a>

                    </td>
                </tr>

                <tr>
                    <td>
                        2
                    </td>
                    <td>
                        <a herf="">ICPC Practice</a>

                    </td>
                    <td>
                        10:30 AM 05/04/2017
                    </td>
                    <td>
                        <a herf="">Asif Imtiaz Shaafi</a>

                    </td>
                </tr>

                <tr>
                    <td>
                        3
                    </td>
                    <td>

                        <a herf="">Beginers Practise</a>

                    </td>
                    <td>
                        10:30 AM 09/04/2017
                    </td>
                    <td>
                        <a herf="">Sayef Reyadh Khan</a>
                    </td>
                </tr>

                </tbody>
            </table>

        </div>

    </div>

    <div id="pageNumber" class="container">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <ul class="pagination">
                        <li><a aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="active"><a>1</a></li>
                        <li><a>2</a></li>
                        <li><a>3</a></li>
                        <li><a>4</a></li>
                        <li><a>5</a></li>
                        <li><a aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
{{--ending the main body section--}}