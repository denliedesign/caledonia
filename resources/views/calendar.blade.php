@extends('layouts.app')
@section('content')

    <div class="bg-white">

        <div class="banner-wrap">
            <div class="banner"></div>
        </div>

        <div class="container py-5">
            <h2 class="text-center mt-3">2021-2022 Calendar</h2>
            <div class="d-flex justify-content-center">
                {{--            <img src="/images/cdmc-calendar.png" alt="calendar" class="img-fluid">--}}
                <table>
                    <tr>
                        <td class="text-right"><strong>Aug 30 </strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>First day of classes</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Sept 6 </strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Obsv. Labor Day – Closed</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Oct 12-15 </strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Inter-sessional Break #1</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Nov 23-26 </strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Thanksgiving Break</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Dec 11-12 </strong> </td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Nutcracker</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Dec 20-Jan 2 </strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Christmas Break</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Jan 17 </strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Obsv. MLK Day – Closed</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Feb 21-25 </strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Inter-sessional Break #2</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Mar 24-30 </strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Parent Watch Week</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Apr 4-8 </strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Spring Break</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>May 30 </strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Obsv. Memorial Day – Closed</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>June 13-16 </strong></td>
                        <td>&nbsp;|&nbsp;</td>
                        <td>Proposed Recitals</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection
