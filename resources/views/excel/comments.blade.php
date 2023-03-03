<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Comments</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <td></td>
                    <td>Name</td>
                    <td>Comment</td>
                    <td>Time</td>
                    <td>Likes</td>
                    <td>Reply Count</td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>Name</td>
                    <td>Comment</td>
                    <td>Time</td>
                    <td>Likes</td>
                    <td>Reply Count</td>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{'Anonimous'}}</td>
                    <td>{{$comment->comment}}</td>
                    <td>{{date('Y-m-d', strtotime($comment->created_at))}}T{{date('H:i:s',
                        strtotime($comment->created_at))}}Z</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
