namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;

class CouponImport implements ToModel
{
    public function model(array $linha)
    {
        // Sua lógica para criar modelos Coupon e Choice a partir dos dados da linha do Excel

        // Exemplo (supondo que você tenha modelos Coupon e Choice):
        $coupon = new \App\Models\Coupon;
        $coupon->punter_name = $linha[0];
        $coupon->punter_phone = $linha[1];
        $coupon->seller_id = $linha[2];
        $coupon->contest_id = $linha[3];
        $coupon->save();

        // Percorra optionColumns e crie modelos Choice
        foreach ($optionColumns as $indice) {
            if (isset($linha[$indice])) {
                $choice = new \App\Models\Choice;
                $choice->match_id = $matchIds[$indice - 5];
                $choice->coupon_id = $coupon->id; // Supondo que 'id' é a chave primária do modelo Coupon
                $choice->option = $linha[$indice];
                $choice->status = '1';
                $choice->save();
            }
        }
    }
}
