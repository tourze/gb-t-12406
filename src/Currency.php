<?php

namespace Tourze\GBT12406;

use Tourze\EnumExtra\Itemable;
use Tourze\EnumExtra\ItemTrait;
use Tourze\EnumExtra\Labelable;
use Tourze\EnumExtra\Selectable;
use Tourze\EnumExtra\SelectTrait;

/**
 * 表示货币的代码
 */
enum Currency: string implements Labelable, Itemable, Selectable
{
    use ItemTrait;
    use SelectTrait;

    case CNX = 'CNX';
    case XRE = 'XRE';
    case BTN = 'BTN';
    case XCD = 'XCD';
    case DDM = 'DDM';
    case XAF = 'XAF';
    case DKK = 'DKK';
    case UAK = 'UAK';
    case UAH = 'UAH';
    case UZS = 'UZS';
    case UGX = 'UGX';
    case UGS = 'UGS';
    case UYU = 'UYU';
    case UYP = 'UYP';
    case UYI = 'UYI';
    case GEK = 'GEK';
    case YDD = 'YDD';
    case YER = 'YER';
    case AMD = 'AMD';
    case CNY = 'CNY';
    case ILS = 'ILS';
    case ILR = 'ILR';
    case ILP = 'ILP';
    case IQD = 'IQD';
    case IRR = 'IRR';
    case BZD = 'BZD';
    case CVE = 'CVE';
    case RUR = 'RUR';
    case RUB = 'RUB';
    case BGN = 'BGN';
    case BGO = 'BGO';
    case BGL = 'BGL';
    case BGM = 'BGM';
    case HRK = 'HRK';
    case HRD = 'HRD';
    case GMD = 'GMD';
    case ISK = 'ISK';
    case ISJ = 'ISJ';
    case GWP = 'GWP';
    case GNF = 'GNF';
    case GNS = 'GNS';
    case CDF = 'CDF';
    case LYD = 'LYD';
    case LRD = 'LRD';
    case CAD = 'CAD';
    case GHS = 'GHS';
    case GHC = 'GHC';
    case HUF = 'HUF';
    case YUN = 'YUN';
    case YUR = 'YUR';
    case YUM = 'YUM';
    case YUD = 'YUD';
    case SSP = 'SSP';
    case ZAR = 'ZAR';
    case ZAL = 'ZAL';
    case BWP = 'BWP';
    case QAR = 'QAR';
    case RWF = 'RWF';
    case LUC = 'LUC';
    case LUF = 'LUF';
    case LUL = 'LUL';
    case INR = 'INR';
    case IDR = 'IDR';
    case GTQ = 'GTQ';
    case ECV = 'ECV';
    case ECS = 'ECS';
    case ERN = 'ERN';
    case SYP = 'SYP';
    case CUC = 'CUC';
    case CUP = 'CUP';
    case KGS = 'KGS';
    case DJF = 'DJF';
    case KZT = 'KZT';
    case COU = 'COU';
    case COP = 'COP';
    case CRC = 'CRC';
    case TMT = 'TMT';
    case TMM = 'TMM';
    case TRY = 'TRY';
    case TRL = 'TRL';
    case STD = 'STD';
    case SHP = 'SHP';
    case GYD = 'GYD';
    case TZS = 'TZS';
    case EGP = 'EGP';
    case ETB = 'ETB';
    case TJR = 'TJR';
    case TJS = 'TJS';
    case RSD = 'RSD';
    case SLL = 'SLL';
    case CYP = 'CYP';
    case SCR = 'SCR';
    case MXN = 'MXN';
    case MXP = 'MXP';
    case MXV = 'MXV';
    case DOP = 'DOP';
    case XPF = 'XPF';
    case ATS = 'ATS';
    case VEF = 'VEF';
    case VEB = 'VEB';
    case BDT = 'BDT';
    case AOA = 'AOA';
    case AOK = 'AOK';
    case AON = 'AON';
    case AOR = 'AOR';
    case ADP = 'ADP';
    case NIO = 'NIO';
    case NIC = 'NIC';
    case NGN = 'NGN';
    case NPR = 'NPR';
    case BSD = 'BSD';
    case PKR = 'PKR';
    case BBD = 'BBD';
    case PGK = 'PGK';
    case PYG = 'PYG';
    case PAB = 'PAB';
    case BHD = 'BHD';
    case BRZ = 'BRZ';
    case BRE = 'BRE';
    case BRR = 'BRR';
    case BRC = 'BRC';
    case BRN = 'BRN';
    case BRB = 'BRB';
    case BRL = 'BRL';
    case BIF = 'BIF';
    case GRD = 'GRD';
    case TPE = 'TPE';
    case KYD = 'KYD';
    case DEM = 'DEM';
    case ITL = 'ITL';
    case SBD = 'SBD';
    case ZRZ = 'ZRZ';
    case LVR = 'LVR';
    case LVL = 'LVL';
    case NOK = 'NOK';
    case CZK = 'CZK';
    case CSK = 'CSK';
    case MDL = 'MDL';
    case MDC = 'MDC';
    case MAF = 'MAF';
    case MAD = 'MAD';
    case MCF = 'MCF';
    case BND = 'BND';
    case FJD = 'FJD';
    case SZL = 'SZL';
    case SKK = 'SKK';
    case SIT = 'SIT';
    case LKR = 'LKR';
    case SGD = 'SGD';
    case TWD = 'TWD';
    case ZRN = 'ZRN';
    case NZD = 'NZD';
    case JPY = 'JPY';
    case CSD = 'CSD';
    case ROL = 'ROL';
    case SDP = 'SDP';
    case MZM = 'MZM';
    case CLE = 'CLE';
    case CLP = 'CLP';
    case CLF = 'CLF';
    case KPW = 'KPW';
    case KHR = 'KHR';
    case GEL = 'GEL';
    case EUR = 'EUR';
    case CHE = 'CHE';
    case XEU = 'XEU';
    case BEF = 'BEF';
    case BEC = 'BEC';
    case BEL = 'BEL';
    case MRO = 'MRO';
    case MUR = 'MUR';
    case TOP = 'TOP';
    case SAR = 'SAR';
    case FRF = 'FRF';
    case XFU = 'XFU';
    case XFO = 'XFO';
    case CHW = 'CHW';
    case PLN = 'PLN';
    case PLZ = 'PLZ';
    case BAN = 'BAN';
    case BAD = 'BAD';
    case BAM = 'BAM';
    case THB = 'THB';
    case ZWD = 'ZWD';
    case ZWR = 'ZWR';
    case ZWL = 'ZWL';
    case HNL = 'HNL';
    case HTG = 'HTG';
    case HKD = 'HKD';
    case AUD = 'AUD';
    case MOP = 'MOP';
    case IEP = 'IEP';
    case EEK = 'EEK';
    case JMD = 'JMD';
    case TTD = 'TTD';
    case BOV = 'BOV';
    case BOP = 'BOP';
    case BOB = 'BOB';
    case BOL = 'BOL';
    case SEK = 'SEK';
    case CHF = 'CHF';
    case VUV = 'VUV';
    case BYN = 'BYN';
    case BYR = 'BYR';
    case BYB = 'BYB';
    case BMD = 'BMD';
    case GIP = 'GIP';
    case FKP = 'FKP';
    case KWD = 'KWD';
    case KMF = 'KMF';
    case PEI = 'PEI';
    case PEN = 'PEN';
    case PES = 'PES';
    case TND = 'TND';
    case LTT = 'LTT';
    case LTL = 'LTL';
    case SOS = 'SOS';
    case JOD = 'JOD';
    case NAD = 'NAD';
    case BUK = 'BUK';
    case MMK = 'MMK';
    case RHD = 'RHD';
    case RON = 'RON';
    case USD = 'USD';
    case USS = 'USS';
    case USN = 'USN';
    case LAK = 'LAK';
    case KES = 'KES';
    case FIM = 'FIM';
    case SDD = 'SDD';
    case SDG = 'SDG';
    case SUR = 'SUR';
    case SRD = 'SRD';
    case SRG = 'SRG';
    case GBP = 'GBP';
    case NLG = 'NLG';
    case ANG = 'ANG';
    case MZE = 'MZE';
    case MZN = 'MZN';
    case LSL = 'LSL';
    case PHP = 'PHP';
    case SVC = 'SVC';
    case WST = 'WST';
    case GWE = 'GWE';
    case PTE = 'PTE';
    case MNT = 'MNT';
    case ESP = 'ESP';
    case ESB = 'ESB';
    case ESA = 'ESA';
    case XOF = 'XOF';
    case ZMW = 'ZMW';
    case ZMK = 'ZMK';
    case GQE = 'GQE';
    case VND = 'VND';
    case VNN = 'VNN';
    case AZN = 'AZN';
    case AZM = 'AZM';
    case AFN = 'AFN';
    case AFA = 'AFA';
    case DZD = 'DZD';
    case ALL = 'ALL';
    case ALK = 'ALK';
    case OMR = 'OMR';
    case ARA = 'ARA';
    case ARS = 'ARS';
    case ARM = 'ARM';
    case ARP = 'ARP';
    case ARL = 'ARL';
    case AED = 'AED';
    case AWG = 'AWG';
    case KRW = 'KRW';
    case KRO = 'KRO';
    case KRH = 'KRH';
    case MKD = 'MKD';
    case MKN = 'MKN';
    case MVP = 'MVP';
    case MVR = 'MVR';
    case MWK = 'MWK';
    case MYR = 'MYR';
    case MTL = 'MTL';
    case MTP = 'MTP';
    case MGF = 'MGF';
    case MGA = 'MGA';
    case MLF = 'MLF';
    case LBP = 'LBP';

    public function getLabel(): string
    {
        return match ($this) {
            self::CNX => 'Chinese People’s Bank Dollar',
            self::XRE => 'RINET 基金',
            self::BTN => '不丹努尔特鲁姆',
            self::XCD => '东加勒比元',
            self::DDM => '东德奥斯特马克',
            self::XAF => '中非法郎',
            self::DKK => '丹麦克朗',
            self::UAK => '乌克兰币',
            self::UAH => '乌克兰格里夫纳',
            self::UZS => '乌兹别克斯坦苏姆',
            self::UGX => '乌干达先令',
            self::UGS => '乌干达先令 (1966–1987)',
            self::UYU => '乌拉圭比索',
            self::UYP => '乌拉圭比索 (1975–1993)',
            self::UYI => '乌拉圭比索（索引单位）',
            self::GEK => '乔治亚库蓬拉瑞特',
            self::YDD => '也门第纳尔',
            self::YER => '也门里亚尔',
            self::AMD => '亚美尼亚德拉姆',
            self::CNY => '人民币',
            self::ILS => '以色列新谢克尔',
            self::ILR => '以色列谢克尔(1980–1985)',
            self::ILP => '以色列镑',
            self::IQD => '伊拉克第纳尔',
            self::IRR => '伊朗里亚尔',
            self::BZD => '伯利兹元',
            self::CVE => '佛得角埃斯库多',
            self::RUR => '俄国卢布 (1991–1998)',
            self::RUB => '俄罗斯卢布',
            self::BGN => '保加利亚列弗',
            self::BGO => '保加利亚列弗 (1879–1952)',
            self::BGL => '保加利亚硬列弗',
            self::BGM => '保加利亚社会党列弗',
            self::HRK => '克罗地亚库纳',
            self::HRD => '克罗地亚第纳尔',
            self::GMD => '冈比亚达拉西',
            self::ISK => '冰岛克朗',
            self::ISJ => '冰岛克朗(1918–1981)',
            self::GWP => '几内亚比绍比索',
            self::GNF => '几内亚法郎',
            self::GNS => '几内亚西里',
            self::CDF => '刚果法郎',
            self::LYD => '利比亚第纳尔',
            self::LRD => '利比里亚元',
            self::CAD => '加拿大元',
            self::GHS => '加纳塞地',
            self::GHC => '加纳塞第',
            self::HUF => '匈牙利福林',
            self::YUN => '南斯拉夫可兑换第纳尔 (1990–1992)',
            self::YUR => '南斯拉夫改良第纳尔 (1992–1993)',
            self::YUM => '南斯拉夫新第纳尔 (1994–2002)',
            self::YUD => '南斯拉夫硬第纳尔 (1966–1990)',
            self::SSP => '南苏丹镑',
            self::ZAR => '南非兰特',
            self::ZAL => '南非兰特 (金融)',
            self::BWP => '博茨瓦纳普拉',
            self::QAR => '卡塔尔里亚尔',
            self::RWF => '卢旺达法郎',
            self::LUC => '卢森堡可兑换法郎',
            self::LUF => '卢森堡法郎',
            self::LUL => '卢森堡金融法郎',
            self::INR => '印度卢比',
            self::IDR => '印度尼西亚盾',
            self::GTQ => '危地马拉格查尔',
            self::ECV => '厄瓜多尔 (UVC)',
            self::ECS => '厄瓜多尔苏克雷',
            self::ERN => '厄立特里亚纳克法',
            self::SYP => '叙利亚镑',
            self::CUC => '古巴可兑换比索',
            self::CUP => '古巴比索',
            self::KGS => '吉尔吉斯斯坦索姆',
            self::DJF => '吉布提法郎',
            self::KZT => '哈萨克斯坦坚戈',
            self::COU => '哥伦比亚币',
            self::COP => '哥伦比亚比索',
            self::CRC => '哥斯达黎加科朗',
            self::TMT => '土库曼斯坦马纳特',
            self::TMM => '土库曼斯坦马纳特 (1993–2009)',
            self::TRY => '土耳其里拉',
            self::TRL => '土耳其里拉 (1922–2005)',
            self::STD => '圣多美和普林西比多布拉',
            self::SHP => '圣赫勒拿群岛磅',
            self::GYD => '圭亚那元',
            self::TZS => '坦桑尼亚先令',
            self::EGP => '埃及镑',
            self::ETB => '埃塞俄比亚比尔',
            self::TJR => '塔吉克斯坦卢布',
            self::TJS => '塔吉克斯坦索莫尼',
            self::RSD => '塞尔维亚第纳尔',
            self::SLL => '塞拉利昂利昂',
            self::CYP => '塞浦路斯镑',
            self::SCR => '塞舌尔卢比',
            self::MXN => '墨西哥比索',
            self::MXP => '墨西哥银比索 (1861–1992)',
            self::MXV => '墨西哥（资金）',
            self::DOP => '多米尼加比索',
            self::XPF => '太平洋法郎',
            self::ATS => '奥地利先令',
            self::VEF => '委内瑞拉玻利瓦尔',
            self::VEB => '委内瑞拉玻利瓦尔 (1871–2008)',
            self::BDT => '孟加拉塔卡',
            self::AOA => '安哥拉宽扎',
            self::AOK => '安哥拉宽扎 (1977–1990)',
            self::AON => '安哥拉新宽扎 (1990–2000)',
            self::AOR => '安哥拉重新调整宽扎 (1995–1999)',
            self::ADP => '安道尔比塞塔',
            self::NIO => '尼加拉瓜科多巴',
            self::NIC => '尼加拉瓜科多巴 (1988–1991)',
            self::NGN => '尼日利亚奈拉',
            self::NPR => '尼泊尔卢比',
            self::BSD => '巴哈马元',
            self::PKR => '巴基斯坦卢比',
            self::BBD => '巴巴多斯元',
            self::PGK => '巴布亚新几内亚基那',
            self::PYG => '巴拉圭瓜拉尼',
            self::PAB => '巴拿马巴波亚',
            self::BHD => '巴林第纳尔',
            self::BRZ => '巴西克鲁塞罗 (1942–1967)',
            self::BRE => '巴西克鲁塞罗 (1990–1993)',
            self::BRR => '巴西克鲁塞罗 (1993–1994)',
            self::BRC => '巴西克鲁扎多 (1986–1989)',
            self::BRN => '巴西新克鲁扎多 (1989–1990)',
            self::BRB => '巴西新克鲁赛罗 (1967–1986)',
            self::BRL => '巴西雷亚尔',
            self::BIF => '布隆迪法郎',
            self::GRD => '希腊德拉克马',
            self::TPE => '帝汶埃斯库多',
            self::KYD => '开曼元',
            self::DEM => '德国马克',
            self::ITL => '意大利里拉',
            self::SBD => '所罗门群岛元',
            self::ZRZ => '扎伊尔 (1971–1993)',
            self::LVR => '拉脱维亚卢布',
            self::LVL => '拉脱维亚拉特',
            self::NOK => '挪威克朗',
            self::CZK => '捷克克朗',
            self::CSK => '捷克硬克朗',
            self::MDL => '摩尔多瓦列伊',
            self::MDC => '摩尔多瓦库邦',
            self::MAF => '摩洛哥法郎',
            self::MAD => '摩洛哥迪拉姆',
            self::MCF => '摩纳哥法郎',
            self::BND => '文莱元',
            self::FJD => '斐济元',
            self::SZL => '斯威士兰里兰吉尼',
            self::SKK => '斯洛伐克克朗',
            self::SIT => '斯洛文尼亚托拉尔',
            self::LKR => '斯里兰卡卢比',
            self::SGD => '新加坡元',
            self::TWD => '新台币',
            self::ZRN => '新扎伊尔 (1993–1998)',
            self::NZD => '新西兰元',
            self::JPY => '日元',
            self::CSD => '旧塞尔维亚第纳尔',
            self::ROL => '旧罗马尼亚列伊',
            self::SDP => '旧苏丹镑',
            self::MZM => '旧莫桑比克美提卡',
            self::CLE => '智利埃斯库多',
            self::CLP => '智利比索',
            self::CLF => '智利（资金）',
            self::KPW => '朝鲜元',
            self::KHR => '柬埔寨瑞尔',
            self::GEL => '格鲁吉亚拉里',
            self::EUR => '欧元',
            self::CHE => '欧元 (WIR)',
            self::XEU => '欧洲货币单位',
            self::BEF => '比利时法郎',
            self::BEC => '比利时法郎（可兑换）',
            self::BEL => '比利时法郎（金融）',
            self::MRO => '毛里塔尼亚乌吉亚',
            self::MUR => '毛里求斯卢比',
            self::TOP => '汤加潘加',
            self::SAR => '沙特里亚尔',
            self::FRF => '法国法郎',
            self::XFU => '法国法郎 (UIC)',
            self::XFO => '法国金法郎',
            self::CHW => '法郎 (WIR)',
            self::PLN => '波兰兹罗提',
            self::PLZ => '波兰兹罗提 (1950–1995)',
            self::BAN => '波士尼亚-赫塞哥维纳新第纳尔 (1994–1997)',
            self::BAD => '波士尼亚-赫塞哥维纳第纳尔 (1992–1994)',
            self::BAM => '波斯尼亚-黑塞哥维那可兑换马克',
            self::THB => '泰铢',
            self::ZWD => '津巴布韦元 (1980–2008)',
            self::ZWR => '津巴布韦元 (2008)',
            self::ZWL => '津巴布韦元 (2009)',
            self::HNL => '洪都拉斯伦皮拉',
            self::HTG => '海地古德',
            self::HKD => '港元',
            self::AUD => '澳大利亚元',
            self::MOP => '澳门币',
            self::IEP => '爱尔兰镑',
            self::EEK => '爱沙尼亚克朗',
            self::JMD => '牙买加元',
            self::TTD => '特立尼达和多巴哥元',
            self::BOV => '玻利维亚 Mvdol（资金）',
            self::BOP => '玻利维亚比索',
            self::BOB => '玻利维亚诺',
            self::BOL => '玻利维亚诺 (1863–1963)',
            self::SEK => '瑞典克朗',
            self::CHF => '瑞士法郎',
            self::VUV => '瓦努阿图瓦图',
            self::BYN => '白俄罗斯卢布',
            self::BYR => '白俄罗斯卢布 (2000–2016)',
            self::BYB => '白俄罗斯新卢布 (1994–1999)',
            self::BMD => '百慕大元',
            self::GIP => '直布罗陀镑',
            self::FKP => '福克兰群岛镑',
            self::KWD => '科威特第纳尔',
            self::KMF => '科摩罗法郎',
            self::PEI => '秘鲁印第',
            self::PEN => '秘鲁索尔',
            self::PES => '秘鲁索尔 (1863–1965)',
            self::TND => '突尼斯第纳尔',
            self::LTT => '立陶宛塔咯呐司',
            self::LTL => '立陶宛立特',
            self::SOS => '索马里先令',
            self::JOD => '约旦第纳尔',
            self::NAD => '纳米比亚元',
            self::BUK => '缅元',
            self::MMK => '缅甸元',
            self::RHD => '罗得西亚元',
            self::RON => '罗马尼亚列伊',
            self::USD => '美元',
            self::USS => '美元（当日）',
            self::USN => '美元（次日）',
            self::LAK => '老挝基普',
            self::KES => '肯尼亚先令',
            self::FIM => '芬兰马克',
            self::SDD => '苏丹第纳尔 (1992–2007)',
            self::SDG => '苏丹镑',
            self::SUR => '苏联卢布',
            self::SRD => '苏里南元',
            self::SRG => '苏里南盾',
            self::GBP => '英镑',
            self::NLG => '荷兰盾',
            self::ANG => '荷属安的列斯盾',
            self::MZE => '莫桑比克埃斯库多',
            self::MZN => '莫桑比克美提卡',
            self::LSL => '莱索托洛蒂',
            self::PHP => '菲律宾比索',
            self::SVC => '萨尔瓦多科朗',
            self::WST => '萨摩亚塔拉',
            self::GWE => '葡萄牙几内亚埃斯库多',
            self::PTE => '葡萄牙埃斯库多',
            self::MNT => '蒙古图格里克',
            self::ESP => '西班牙比塞塔',
            self::ESB => '西班牙比塞塔（兑换帐户）',
            self::ESA => '西班牙比塞塔（帐户 A）',
            self::XOF => '西非法郎',
            self::ZMW => '赞比亚克瓦查',
            self::ZMK => '赞比亚克瓦查 (1968–2012)',
            self::GQE => '赤道几内亚埃奎勒',
            self::VND => '越南盾',
            self::VNN => '越南盾 (1978–1985)',
            self::AZN => '阿塞拜疆马纳特',
            self::AZM => '阿塞拜疆马纳特 (1993–2006)',
            self::AFN => '阿富汗尼',
            self::AFA => '阿富汗尼 (1927–2002)',
            self::DZD => '阿尔及利亚第纳尔',
            self::ALL => '阿尔巴尼亚列克',
            self::ALK => '阿尔巴尼亚列克(1946–1965)',
            self::OMR => '阿曼里亚尔',
            self::ARA => '阿根廷奥斯特拉尔',
            self::ARS => '阿根廷比索',
            self::ARM => '阿根廷比索 (1881–1970)',
            self::ARP => '阿根廷比索 (1983–1985)',
            self::ARL => '阿根廷法定比索 (1970–1983)',
            self::AED => '阿联酋迪拉姆',
            self::AWG => '阿鲁巴弗罗林',
            self::KRW => '韩元',
            self::KRO => '韩元 (1945–1953)',
            self::KRH => '韩元 (1953–1962)',
            self::MKD => '马其顿第纳尔',
            self::MKN => '马其顿第纳尔 (1992–1993)',
            self::MVP => '马尔代夫卢比(1947–1981)',
            self::MVR => '马尔代夫卢菲亚',
            self::MWK => '马拉维克瓦查',
            self::MYR => '马来西亚林吉特',
            self::MTL => '马耳他里拉',
            self::MTP => '马耳他镑',
            self::MGF => '马达加斯加法郎',
            self::MGA => '马达加斯加阿里亚里',
            self::MLF => '马里法郎',
            self::LBP => '黎巴嫩镑',
        };
    }
}
