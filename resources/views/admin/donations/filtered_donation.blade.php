@if (count($donations) === 0)
                        <tr>
                            <td colspan="8" style="text-align: center; color:red;"><strong>SORRY!! </strong>No donations are available.</b></td></tr>
                    @else
                      @foreach($donations as $donation)
                        <tr>
                            <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['id']}}
                            </td>
                            <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['amount']}}
                            </td>
                            @if(($donation['donator_type'] == "Irregular Donator") )
                                <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['donator_name']}}                                        
                                </td>
                            @else
                                <td style="padding:15px 10px;text-align:center;">
                                    <a href="{{ url('admin/donators/'.$donation['donator_id']) }}">{{ $donation['donator_name']}}</a>                           
                                </td>
                            @endif
                            <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['donator_type']}}    
                            </td>
                            <td style="padding:15px 10px;text-align:center;">
                                {{date('d-m-Y', strtotime($donation->date))}}
                            </td>
                            <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['donation_type']}}
                            </td>
                            <td>
                                <a href="{{ url('admin/show-donation-details/'.$donation['id']) }}">
                                    <i style="font-size:35px;text-align: center"  class="mdi mdi-eye" title="show detals"></i>
                                </a> 
                            </td>
                        </tr>
                      @endforeach
                    @endif