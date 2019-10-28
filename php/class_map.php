<?php

return [
    //all pages map to the controller
    ''=> 'Home',
    'home' => 'Home',
    
    //STATIC PAGES
    'about' => 'About',
    'faq' => 'Faq',
    'policy' => 'Policy',
    'contacts' => 'Contacts',
    'contacts-message' => 'ContactsMessage',
    
    //REGISTRATION
    'register' => 'security\Register',
    'register-response' => 'security\RegisterResponse',
    
    //LOGIN
    'login' => 'security\Login',
    'login-response' => 'security\LoginResponse',
    'reset-password' => 'security\ResetPassword',
    'logout' => 'security\Logout',
    
    //USER ACCOUNT
    'change-details-response' => 'security\ChangeDetailsResponse',
    'change-password' => 'security\ChangePassword',
    'change-password-response' => 'security\ChangePasswordResponse',
    'change-details' => 'security\ChangeDetails',
    'change-address' => 'security\ChangeAddress',
    'change-address-response' => 'security\AddressResponse',
    'account' => 'security\Account',
    
    //ADMIN
    'admin' => 'admin\Admin',
    'admin-categories' => 'admin\AdminCategories',
    'admin-edit-category' => 'admin\AdminEditCategory',
    'admin-edit-category-response' => 'admin\AdminEditCategoryResponse',
    'admin-products' => 'admin\AdminProducts',
    'admin-edit-product' => 'admin\AdminEditProduct',
    'admin-edit-product-response' => 'admin\AdminEditProductResponse', 
    'admin-add-product' => 'admin\AdminAddProduct',
    'admin-add-product-response' => 'admin\AdminAddProductResponse', 
    'admin-edit-user' => 'admin\AdminEditUser',
    'admin-edit-user-response' => 'admin\AdminEditUserResponse',
    'admin-delete-user' => 'admin\AdminDeleteUser',
    'admin-unlock-user' => 'admin\AdminUnlockUser',
    'admin-orders'=> 'admin\AdminOrders',
    'admin-view-order'=> 'admin\AdminViewOrder',
    'admin-reports'=> 'admin\AdminReports',
    'admin-reports-users'=> 'admin\AdminReportsUsers',
    'admin-reports-bestsellers'=> 'admin\AdminReportsBestsellers',
    'admin-reports-shopping-cart'=> 'admin\AdminReportsShoppingCart',
    'admin-reports-sales'=> 'admin\AdminReportsSales',
    'admin-reports-sales-total'=> 'admin\AdminReportsSalesTotal',
    'newsletter' => 'admin\Newsletter',
    'bulkNewsletter' => 'admin\BulkNewsletter',
    
    //PRODUCTS
    'products' => 'Products',
    'description' => 'Description',
    'search' => 'Search',
    
    //SHOPPING CART, CHECKOUT AND PAYMENT
    'cart' => 'cart\Cart',
    'save-cart' => 'cart\SaveCart',
    'resume-cart' => 'cart\ResumeCart',
    'checkout' => 'cart\Checkout',
    'payment' => 'cart\Payment',
    'execute-payment' => 'cart\ExecutePayment'
    
];

?>
 