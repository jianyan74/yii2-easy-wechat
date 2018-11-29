<?php
namespace jianyan\easywechat;

use yii\base\Component;

/**
 * 微信授权用户的个人信息
 *
 * Class WechatUser
 * @package jianyan\easywechat
 * @property string $openId 微信授权用户的唯一标识(openid)
 * @see https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421140842 返回的JSON数据包的格式参考第四步
 */
class WechatUser extends Component
{
    /**
     * 用户的唯一标识(openid)
     *
     * @var string
     */
    public $id;
    /**
     * 用户昵称
     *
     * @var string
     */
    public $nickname;
    /**
     * 用户昵称
     *
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $email;
    /**
     * 用户头像, 最后一个数值代表正方形头像大小(有0,46,64,96,132数值可选, 0代表640*640正方形头像)
     *
     * @var string
     */
    public $avatar;
    /**
     * 原数据, 微信授权返回的JSON数据包
     *
     * @var array
     */
    public $original;
    /**
     * 微信授权获取用户信息token
     *
     * @var \Overtrue\Socialite\AccessToken
     */
    public $token;
    /**
     * @var string
     */
    public $provider;


    /**
     * 微信授权用户的唯一标识(openid)
     *
     * @return string
     */
    public function getOpenId()
    {
        return isset($this->original['openid']) ? $this->original['openid'] : '';
    }
}
