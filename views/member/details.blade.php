<div id="tagline" class="title tleft"><section><h2>Member Area</h2></section></div>
  
<section class="page">
    <aside>
        <ul class="accordion">
            <li><a href="{{url('member')}}">Daftar Pembelian</a></li>
            <li><a href="{{url('member/profile/edit')}}">Ubah Profil</a></li>
        </ul>
    </aside> 
    <article>
        @if($pengaturan->checkoutType!=2)
            @if(list_order()->count() > 0)
            <div class="table-responsive">
                <table cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Kode Order</th>
                            <th>Tanggal Order</th>
                            <th>Detail Order</th>
                            <th>Total Order</th>
                            <th>No. Resi</th>
                            <th>Status</th>
                            <th>Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach (list_order() as $item)
                        <tr>
                            <td class="break">{{ $pengaturan->checkoutType==3 ? prefixOrder().$item->kodePreorder : prefixOrder().$item->kodeOrder }}</td>
                            <td>{{ $pengaturan->checkoutType==3 ? waktu($item->tanggalPreorder) : waktu($item->tanggalOrder) }}</td>
                            <td>
                                <ul>
                                @if($pengaturan->checkoutType==3) 
                                    <li>{{$item->preorderdata->produk->nama}} ({{$item->opsiSkuId==0 ? 'No Opsi' : $item->opsisku->opsi1.($item->opsisku->opsi2!='' ? ' / '.$item->opsisku->opsi2:'').($item->opsisku->opsi3!='' ? ' / '.$item->opsisku->opsi3:'')}}) - {{$item->jumlah}}<li>
                                @else 
                                    @foreach ($item->detailorder as $detail)
                                    
                                    <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
                                    
                                    @endforeach 
                                @endif
                                </ul>
                            </td>
                            <td>{{ price($item->total) }}</td>
                            <td class="break">{{ $item->noResi }}</td>
                            <td>
                            @if($pengaturan->checkoutType==1) 
                                @if($item->status==0)
                                <span class="label label-warning">Pending</span>
                                @elseif($item->status==1)
                                <span class="label label-info">Konfirmasi diterima</span>
                                @elseif($item->status==2)
                                <span class="label label-success">Pembayaran diterima</span>
                                @elseif($item->status==3)
                                <span class="label label-info">Terkirim</span>
                                @elseif($item->status==4)
                                <span class="label label-default">Batal</span>
                                @endif 
                            @else 
                                @if($item->status==0)
                                <span class="label label-warning">Pending</span>
                                @elseif($item->status==1)
                                <span class="label label-info">Konfirmasi DP diterima</span>
                                @elseif($item->status==2)
                                <span class="label label-success">DP terbayar</span>
                                @elseif($item->status==3)
                                <span class="label label-info">Menunggu pelunasan</span>
                                @elseif($item->status==4)
                                <span class="label label-success">Pembayaran lunas</span>
                                @elseif($item->status==5)
                                <span class="label label-info">Terkirim</span>
                                @elseif($item->status==6)
                                <span class="label label-default">Batal</span>
                                @elseif($item->status==7)
                                <span class="label label-info">Konfirmasi Pelunasan diterima</span>
                                @endif
                            @endif
                            </td>
                            <td class="konfirmasi">
                            @if($pengaturan->checkoutType==3) 
                                @if($item->status < 4)
                                <button onclick="window.location.href='{{url('konfirmasipreorder/'.$item->id)}}'" class="btn btn-small btn-success">Edit</button>
                                @endif 
                            @endif
                            @if($pengaturan->checkoutType==1) 
                                @if($item->status < 1)
                                <button onclick="window.location.href='{{url('konfirmasiorder/'.$item->id)}}'" class="btn btn-small btn-success">Edit</button>
                                @endif 
                            @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <span>Belum ada data order</span>
            @endif
        @else 
            @if($inquiry->count()!=0)
            <div class="table-responsive">
                <table cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>ID Order</th>
                        <th>Tanggal Order</th>
                        <th>Detail Order</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inquiry as $item)
                    <tr>
                        <td>{{prefixOrder()}}{{$item->kodeInquiry}}</td>
                        <td>{{waktu($item->created_at)}}</td>
                        <td>
                            @foreach ($item->detailInquiry as $detail)
                            <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
                            @endforeach
                        </td>
                        <td>
                            @if($item->status==0)
                            <span class="label label-warning">Pending</span>
                            @elseif($item->status==1)
                            <span class="label label-success">Inquiry diterima</span>
                            @elseif($item->status==2)
                            <span class="label label-info">Batal</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            @else
                    <tbody><tr><td colspan="2">Inquiry anda masih kosong.</td></tr></tbody>
            @endif
                </table>
            </div>
        @endif 
        {{list_order()->links()}} 
    </article>
</section>