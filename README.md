Shopp-Auto-Capture-Payment
==========================

Add-on for [Shopp e-commerce plug-in](https://github.com/ingenesis/shopp) to auto capture payments.

**Warning!**

**Visa and MasterCard rules require that merchants only authorize payments for delayed fulfillment orders until the order ships out. In other words, merchants aren’t supposed to capture the payment until the shipment is handed over to the shipping carrier. It isn’t illegal to authorize and capture payments before shipping. But it puts both the merchant and the customer at higher risk. For this reason, to protect the merchant, Shopp uses authorization-only payment processing for shipped orders.**

Despite the risks, some merchants still prefer the automatic capture when new orders are placed.
You can edit your theme's functions.php but these changes are lost on future theme update.
This plug-in will do the dirty work for you.

