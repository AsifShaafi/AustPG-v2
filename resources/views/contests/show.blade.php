{{--adding the main template--}}
@extends("layouts.main")

{{--adding the main body segment of the page here--}}
<!-- Main Content Body starts from here -->
@section("container")

        <div class="row">
            <div class="col-md-12">


                <table class="table table-hover table-condensed">
                    <thead>
                    <tr class="warning">
                        <th>
                            Problem Number
                        </th>
                        <th>
                            Problem Name
                        </th>
                        <th>
                            Time & Memory
                        </th>
                        <th>
                            Status
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <a href="{{route("contestProblemShow", ["contestId" => 1, "problemId" => 1])}}">
                                Problem 1
                            </a>
                        </td>
                        <td>
                            1MS & 1MB
                        </td>
                        <td>
                            2/8
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            <a href="problemDescription.html">Problem 1 </a>
                        </td>
                        <td>
                            1MS & 1MB
                        </td>
                        <td>
                            2/8
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3
                        </td>
                        <td>
                            <a href="#">Problem 1 </a>
                        </td>
                        <td>
                            1MS & 1MB
                        </td>
                        <td>
                            2/8
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4
                        </td>
                        <td>
                            <a href="#">Problem 1 </a>
                        </td>
                        <td>
                            1MS & 1MB
                        </td>
                        <td>
                            2/8
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5
                        </td>
                        <td>
                            <a href="#">Problem 1 </a>
                        </td>
                        <td>
                            1MS & 1MB
                        </td>
                        <td>
                            2/8
                        </td>
                    </tr>

                    </tbody>
                </table>


            </div>

        </div>

@endsection