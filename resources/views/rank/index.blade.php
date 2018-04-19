{{--adding the main template--}}
@extends("layouts.main")

{{--adding the main body segment of the page here--}}
@section("container")

    <div class="row">
        <div class="col-md-12">

            <div class="jumbotron well text-center">
                <h2>Rank List</h2>
                <p></p>
            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>
                        <h3>Position
                            <small></small>
                        </h3>
                    </th>
                    <th>
                        <h3>Name
                            <small></small>
                        </h3>
                    </th>
                    <th>
                        <h3>Roll
                            <small></small>
                        </h3>
                    </th>
                    <th>
                        <h3>Points
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
                        <a herf="">Sifat Ahmed</a>
                    </td>
                    <td>
                        15.01.04.144
                    </td>
                    <td>
                        958
                    </td>
                </tr>

                <tr>
                    <td>
                        2
                    </td>
                    <td>
                        <a herf="">Asif Imtiaz Shaafi</a>

                    </td>
                    <td>
                        15.01.04.136
                    </td>
                    <td>
                        867
                    </td>
                </tr>

                <td>
                    3
                </td>
                <td>

                    <a herf="">Sayef Reyadh Khan</a>

                </td>
                <td>
                    15.01.04.128
                </td>
                <td>
                    730
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