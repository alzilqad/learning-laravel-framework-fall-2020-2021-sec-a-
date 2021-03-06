<!DOCTYPE html>
<html>

<head>
    <title>Update User</title>
</head>

<body>

    <h3>User Detail</h3>
    <a href="{{route('user.userlist')}}">Back</a> |
    <a href="/logout">logout</a>

    <br>
    <br>

    <form method="post">
        @csrf
        <!-- {{ csrf_field() }} -->
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" name="jobTitle" value="{{ $job['jobTitle'] }}"></td>
                    <td>
                        @error('jobTitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Company</td>
                    <td><input type="text" name="companyName" value="{{ $job['companyName'] }}"></td>
                    <td>
                        @error('companyName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td><input type="text" name="jobLocation" value="{{ $job['jobLocation'] }}"></td>
                    <td>
                        @error('jobLocation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                
                <tr>
                    <td>Salary</td>
                    <td><input type="text" name="salary" value="{{ $job['salary'] }}"></td>
                    <td>
                        @error('salary')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Update Job"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>