
@component('mail::message')
<<<<<<< HEAD
# Order Confirmation

Thank you for your order! Your invoice is attached.

**Order ID:** #{{ $order->id }}  
**Order Total:** {{ rupiah($order->total) }}  
**Payment Method:** {{ ucfirst($order->payment_method) }}

@component('mail::button', ['url' => ''])
View Order
@endcomponent

Thanks,<br>
=======
# Konfirmasi Pesanan

Terima kasih atas pesanan Anda! Faktur terlampir pada email ini.

**ID Pesanan:** #{{ $order->id }}  
**Total Pesanan:** {{ rupiah($order->total) }}  
**Metode Pembayaran:** {{ ucfirst($order->payment_method) }}

@component('mail::button', ['url' => ''])
Lihat Pesanan
@endcomponent

Terima kasih,<br>
>>>>>>> 4ec54b9e (update terbaru)
{{ config('app.name') }}
@endcomponent