<?php
declare(strict_types=1);

namespace Vendic\CountryPreselect\ViewModel;

class GeoIp implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    protected $ipToCountryRepository;

    public function __construct(
        \Magefan\GeoIp\Model\IpToCountryRepository $ipToCountryRepository
    )
    {
        $this->ipToCountryRepository = $ipToCountryRepository;
    }

    public function getVisitorCountyCode()
    {
        return $this->ipToCountryRepository->getVisitorCountryCode();
    }
}
