<? use App\Models\Donation; ?>

@if (count($donations) === 0)
                        <tr>
                            <td colspan="8" style="text-align: center; color:red;"><strong>SORRY!! </strong>No donations are available.</b></td></tr>
                    @else
                      @foreach($donations as $key => $donation)
                        <tr>
                            <td style="padding:15px 10px;text-align:center;">
                                {{$key+1}}
                            </td>
                            <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['amount']}}
                            </td>
                            @if(($donation['donator_type'] == "0") )
                                <td style="padding:15px 10px;text-align:center;">
                                {{ $donation['donator_name']}}                                        
                                </td>
                            @else
                                <td style="padding:15px 10px;text-align:center;">
                                    <a href="{{ url('admin/donators/'.$donation['donator_id']) }}">{{ $donation['donator_name']}}</a>                           
                                </td>
                            @endif
                            <td style="padding:15px 10px;text-align:center;">
                                @if( $donation['donator_type'] == "0")
                                Irregular Donator
                                @elseif($donation['donator_type'] == "1")
                                Yearly Donator
                                @else
                                Monthly Donator
                                @endif    
                            </td>
                            <td style="padding:15px 10px;text-align:center;">
                                {{date('d-m-Y', strtotime($donation['date']))}}
                            </td>
                            <td style="padding:15px 10px;text-align:center;">
                            {{Donation::find($donation['donation_type'])->project()->get()->value('name'); }}
                                
                            </td>
                            <td>
                                <a href="{{ url('admin/donations/'.$donation['id']) }}">
                                    <i style="font-size:35px;text-align: center"  class="mdi mdi-eye" title="show detals"></i>
                                </a> 
                            </td>
                        </tr>
                      @endforeach
                    @endif