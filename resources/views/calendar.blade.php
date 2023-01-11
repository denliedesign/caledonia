@extends('layouts.app')
@section('content')

    <div class="bg-white">

        <div class="banner-wrap">
            <div class="banner"></div>
        </div>

        <div class="container py-5">
            <h2 class="text-center mt-3">2023 Calendar</h2>
            <div class="d-flex justify-content-center">
                {{--            <img src="/images/cdmc-calendar.png" alt="calendar" class="img-fluid">--}}
                <table>
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Jan 17 </strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Obsv. MLK Day – Closed</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Feb 21-25 </strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Inter-sessional Break #2</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Mar 24-30 </strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Parent Watch Week</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Apr 4-8 </strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Spring Break</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>April 29-May 1</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Recital Pictures Weekend</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>May 7</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>2022-2023 Performance Group Auditions</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>May 30 </strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Obsv. Memorial Day – Closed</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>June 13-16</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Dance Recital Performances at CHS FAC</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>June 21</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Music Recital Performance</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Aug 29</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>First Day of Dance for the 2022-2023 Season</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Sept 5</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Obsv. Labor Day - Closed</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Oct 1</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Nutcracker Auditions</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Oct 17-21</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Inter-sessional Break #1</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Oct 31</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Obsv. Halloween - Closed</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Nov 22-25</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Thanksgiving Break</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Dec 8</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Nutcracker Rehearsals - No Class</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Dec 10-11</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Nutcracker Performances</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>Dec 19-Jan 2</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Christmas Break</td>--}}
{{--                    </tr>--}}
                    <tr>
                        <td class="text-right"><strong>Jan 16</strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>MLK Day - Open for Classes</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Feb 6-10</strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Inter-Sessional Break #2</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Mar 23-29</strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Parent Observation Week</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Apr 3-7</strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Spring Break</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Apr 21-23</strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Recital Pictures Weekend</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>May 29</strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Obsv. Memorial Day - Closed</td>
                    </tr>
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>June 5-9</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Proposed Dance Dress Rehearsals</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td class="text-right"><strong>June 12-16</strong></td>--}}
{{--                        <td>&nbsp;|&nbsp;</td>--}}
{{--                        <td>Proposed Dance Recitals</td>--}}
{{--                    </tr>--}}
                    <tr>
                        <td class="text-right"><strong>June 5-8</strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Dance Dress Rehearsals</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>June 12-15</strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Dance Recitals</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>June 19</strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Music Dress Rehearsal</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>June 20</strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Music Recital</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection
