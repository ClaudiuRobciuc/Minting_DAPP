import React, { useEffect, useState, useRef } from "react";
import { useDispatch, useSelector } from "react-redux";
import { connect } from "./redux/blockchain/blockchainActions";
import { fetchData } from "./redux/data/dataActions";
import * as s from "./styles/globalStyles";
import styled from "styled-components";

const truncate = (input, len) =>
  input.length > len ? `${input.substring(0, len)}...` : input;

export const StyledButton = styled.button`
  padding: 10px;
  border-radius: 50px;
  border: none;
  background-color: var(--secondary);
  padding: 10px;
  font-weight: bold;
  color: var(--secondary-text);
  width: 100px;
  cursor: pointer;
  box-shadow: 0px 6px 0px -2px rgba(250, 250, 250, 0.3);
  -webkit-box-shadow: 0px 6px 0px -2px rgba(250, 250, 250, 0.3);
  -moz-box-shadow: 0px 6px 0px -2px rgba(250, 250, 250, 0.3);
  :active {
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
  }
`;

export const StyledRoundButton = styled.button`
  padding: 10px;
  border-radius: 100%;
  border: none;
  background-color: #104255;
  padding: 10px;
  font-weight: bold;
  font-size: 15px;
  color: var(--primary-text);
  width: 30px;
  height: 30px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 4px 0px -2px rgba(250, 250, 250, 0.3);
  -webkit-box-shadow: 0px 4px 0px -2px rgba(250, 250, 250, 0.3);
  -moz-box-shadow: 0px 4px 0px -2px rgba(250, 250, 250, 0.3);
  :active {
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
  }
`;

export const GradientButton = styled.button`
font-size: 13px;
	font-weight: 500;
	letter-spacing: 1px;
	line-height: 1;
	margin-left: 8px;
	margin-right: 8px;
	padding: 14px 28px;
	border-radius: 25px;
	border: none;
	box-shadow: none;
	outline: none;
  background: linear-gradient(to left, #5496FF, #8739E5) !important;
  color: var(--secondary-text);
  cursor: pointer;
  -webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	box-shadow: 0 8px 6px -6px rgba(0, 0, 0, .3);
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
  :before{
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 25px;
  }
  :after{
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 25px;
    -webkit-transition: all 300ms linear;
    transition: all 300ms linear; 
    opacity: 0;
  }
  :hover:after{
    opacity: 1; 
  }
  :disabled{
    background: #8f8e8e !important;
    color: #c5c5c5;
  }
`;

export const ResponsiveWrapper = styled.div`
  display: flex;
  flex: 1;
  flex-direction: column;
  justify-content: stretched;
  align-items: stretched;
  width: 100%;
  @media (min-width: 767px) {
    flex-direction: row;
  }
`;

export const StyledLogo = styled.img`
  width: 200px;
  @media (min-width: 767px) {
    width: 300px;
  }
  transition: width 0.5s;
  transition: height 0.5s;
`;

export const StyledImg = styled.img`
  box-shadow: 0px 5px 11px 2px rgba(0, 0, 0, 0.7);
  border: 4px var(--secondary);
  background-color: var(--accent);
  border-radius: 100%;
  width: 200px;
  @media (min-width: 900px) {
    width: 250px;
  }
  @media (min-width: 1000px) {
    width: 300px;
  }
  transition: width 0.5s;
`;

export const StyledLink = styled.a`
  color: var(--secondary);
  text-decoration: none;
`;

function App() {
  const dispatch = useDispatch();
  const blockchain = useSelector((state) => state.blockchain);
  const data = useSelector((state) => state.data);
  const [claimingNft, setClaimingNft] = useState(false);
  const [tokenApproval, setTokenApproval] = useState(false);
  const [feedback, setFeedback] = useState(`Approve tokens then MINT your NFT`);
  const [mintAmount, setMintAmount] = useState(1);
  const [CONFIG_MINT, SET_CONFIG_MINT] = useState({
    CONTRACT_ADDRESS: "",
    SCAN_LINK: "",
    NETWORK: {
      NAME: "",
      SYMBOL: "",
      ID: 0,
    },
    MAX_MINT: 1,
    NFT_NAME: "",
    SYMBOL: "",
    MAX_SUPPLY: 1,
    WEI_COST: 0,
    DISPLAY_COST: 0,
    GAS_LIMIT: 0,
    MARKETPLACE: "",
    MARKETPLACE_LINK: "",
    SHOW_BACKGROUND: false,
  });
  const [CONFIG_TOKEN, SET_CONFIG_TOKEN] = useState({
    CONTRACT_ADDRESS: "",
    SCAN_LINK: "",
    NETWORK: {
      NAME: "",
      SYMBOL: "",
      ID: 0,
    },
  GAS_LIMIT: 0,
  });

  const comingSoon = false;

  const approveFehu = () => {
    let gasLimit = CONFIG_TOKEN.GAS_LIMIT;
    let totalGasLimit = String(gasLimit);
    let cost = CONFIG_MINT.FEHU_COST;
    console.log("Gas limit: ", totalGasLimit);
    setFeedback(`Approving FEHU token spending...`);
    setTokenApproval(true);

    blockchain.smartContractToken.methods.approve(CONFIG_MINT.CONTRACT_ADDRESS, mintAmount * cost)
      .estimateGas({from: blockchain.account})
      .then(function(gasAmount){
        blockchain.smartContractToken.methods
        .approve(CONFIG_MINT.CONTRACT_ADDRESS, mintAmount * cost)
        .send({
          gasLimit: String(totalGasLimit),
          to: CONFIG_TOKEN.CONTRACT_ADDRESS,
          from: blockchain.account,
          gasAmount: gasAmount,
          value: 0,
        }).on('receipt', function(receipt) {
          console.log(receipt);
          setFeedback(
            `Token spending approval successfull!`
          );
          setTokenApproval(false);
          dispatch(fetchData(mintAmount, blockchain.account));
        }).on('error', function(error){
          console.log(error);
          setFeedback("Transaction Rejected. Try again.");
          setTokenApproval(false);
        });
      })
      .catch(function(error){
        console.log(error);
        setFeedback("Sorry, gas estimation failed");
        setTokenApproval(false);
    });
  }

  const claimNFTs = () => {
    if(!data.checkAllowance){
      setFeedback("Sorry, not enough FEHU allowance provided.");
      return;
    }

    let gasLimit = CONFIG_MINT.GAS_LIMIT;
    let totalGasLimit = String(gasLimit * mintAmount);

    console.log("Gas limit: ", totalGasLimit);
    setFeedback(`Minting your ${CONFIG_MINT.NFT_NAME}...`);
    setClaimingNft(true);
    blockchain.smartContractMint.methods.mint(blockchain.account, mintAmount)
      .estimateGas({from: blockchain.account})
      .then(function(gasAmount){
        blockchain.smartContractMint.methods
        .mint(blockchain.account, mintAmount)
        .send({
          gasLimit: String(totalGasLimit),
          to: CONFIG_MINT.CONTRACT_ADDRESS,
          from: blockchain.account,
          gasAmount: gasAmount,
          value: 0,
          })
        .on('receipt', function(receipt) {
          console.log(receipt);
          setFeedback(
            `WOW, the ${CONFIG_MINT.NFT_NAME} is yours! go visit Opensea.io to view it.`
          );
          setClaimingNft(false);
          dispatch(fetchData(mintAmount, blockchain.account));
        }).on('error', function(error){
          console.log(error);
          setFeedback("Sorry, something went wrong please try again later.");
          setClaimingNft(false);
        });
      })
      .catch(function(error){
        console.log(error);
        setFeedback("Sorry, gas estimation failed");
        setClaimingNft(false);
    });
    
  };

  const decrementMintAmount = () => {
    let newMintAmount = mintAmount - 1;
    if (newMintAmount < 1) {
      newMintAmount = 1;
    }
    setMintAmount(newMintAmount);
    dispatch(fetchData(newMintAmount, blockchain.account));
  };

  const incrementMintAmount = () => {
    let newMintAmount = mintAmount + 1;

    if (newMintAmount > CONFIG_MINT.MAX_MINT) {
      newMintAmount = CONFIG_MINT.MAX_MINT;
    }
   
    if (newMintAmount > CONFIG_MINT.MAX_SUPPLY - data.totalSupply) {
      newMintAmount = data.totalSupply;
    }
  
    setMintAmount(newMintAmount);
    dispatch(fetchData(newMintAmount, blockchain.account));
  };

  const getData = () => {
    if (blockchain.account !== "" && blockchain.smartContractMint !== null && blockchain.smartContractToken !== null) {
      dispatch(fetchData(mintAmount ?? 1, blockchain.account));
    }
  };

  const getConfigMint = async () => {
    const configResponse = await fetch("./js/mintDapp/config/settings/config_mint.json", {
      headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
      },
    });
    const config = await configResponse.json();
    console.log(config);
    SET_CONFIG_MINT(config);
  };

  const getConfigToken = async () => {
    const configResponse = await fetch("./js/mintDapp/config/settings/config_token.json", {
      headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
      },
    });
    const config = await configResponse.json();
    console.log(config);
    SET_CONFIG_TOKEN(config);
  };

  useEffect(() => {
    getConfigMint();
    getConfigToken();
  }, []);

  useEffect(() => {
    getData();
  }, [blockchain.account]);

  if(comingSoon){
    return (
      <s.Screen>
        <s.Container
          flex={1}
          ai={"center"}
          style={{ padding: 24, backgroundColor: "white" }}
          image={CONFIG_MINT.SHOW_BACKGROUND ? "./storage/images/bg.png" : null}
        >
          <a href={CONFIG_MINT.MARKETPLACE_LINK}>
            <StyledLogo alt={"logo"} src={"./storage/images/logo.png"} />
          </a>
          <s.SpacerSmall />
          <ResponsiveWrapper flex={1} style={{ padding: 24 }} test>
            <s.Container flex={1} jc={"center"} ai={"center"}>
              <StyledImg alt={"example"} src={"./storage/images//example.gif"} />
            </s.Container>
            <s.SpacerLarge />
            <s.Container
              flex={2}
              jc={"center"}
              ai={"center"}
              style={{
                backgroundColor: "var(--accent)",
                padding: 24,
                borderRadius: 24,
                border: "4px var(--secondary)",
                boxShadow: "0px 5px 11px 2px rgba(0,0,0,0.7)",
              }}
            >
              <s.TextTitle
                style={{
                  textAlign: "center",
                  fontSize: 50,
                  fontWeight: "bold",
                  color: "var(--accent-text)",
                }}
              >
                {data.totalSupply} / {CONFIG_MINT.MAX_SUPPLY}
              </s.TextTitle>
              <s.TextDescription
                style={{
                  textAlign: "center",
                  color: "var(--primary-text)",
                }}
              >
                <StyledLink target={"_blank"} href={CONFIG_MINT.SCAN_LINK}>
                  {truncate(CONFIG_MINT.CONTRACT_ADDRESS, 21)}
                </StyledLink>
              </s.TextDescription>
              <span
                style={{
                  textAlign: "center",
                }}
              >
                <GradientButton
                  onClick={(e) => {
                    window.open("./storage/roadmap.pdf", "_blank");
                  }}
                  style={{
                    margin: "5px",
                  }}
                >
                  Roadmap
                </GradientButton>
                <GradientButton
                  style={{
                    margin: "5px",
                  }}
                  onClick={(e) => {
                    window.open(CONFIG_MINT.MARKETPLACE_LINK, "_blank");
                  }}
                >
                  {CONFIG_MINT.MARKETPLACE}
                </GradientButton>
              </span>
              <s.SpacerSmall />
              {Number(data.totalSupply) >= CONFIG_MINT.MAX_SUPPLY ? (
                <>
                  <s.TextTitle
                    style={{ textAlign: "center", color: "var(--accent-text)" }}
                  >
                    The sale has ended.
                  </s.TextTitle>
                  <s.TextDescription
                    style={{ textAlign: "center", color: "var(--accent-text)" }}
                  >
                    You can still find {CONFIG_MINT.NFT_NAME} on
                  </s.TextDescription>
                  <s.SpacerSmall />
                  <StyledLink target={"_blank"} href={CONFIG_MINT.MARKETPLACE_LINK}>
                    {CONFIG_MINT.MARKETPLACE}
                  </StyledLink>
                </>
              ) : (
                <>
                  <s.TextTitle
                    style={{ textAlign: "center", color: "var(--accent-text)" }}
                  >
                    1 {CONFIG_MINT.SYMBOL} costs {CONFIG_MINT.DISPLAY_COST}{" "}
                    {CONFIG_MINT.NETWORK.SYMBOL}.
                  </s.TextTitle>
                  <s.SpacerXSmall />
                  <s.TextDescription
                    style={{ textAlign: "center", color: "var(--accent-text)" }}
                  >
                    Excluding gas fees.
                  </s.TextDescription>
                  <s.SpacerSmall />
                  {blockchain.account === "" ||
                  (blockchain.smartContractMint === null && blockchain.smartContractToken === null ) ? (
                    <s.Container ai={"center"} jc={"center"}>
                      <s.TextDescription
                        style={{
                          textAlign: "center",
                          color: "var(--accent-text)",
                        }}
                      >
                        Connect to the {CONFIG_MINT.NETWORK.NAME} network
                      </s.TextDescription>
                      <s.SpacerSmall />
                      <GradientButton
                        onClick={(e) => {
                          e.preventDefault();
                          dispatch(connect());
                          getData();
                        }}
                      >
                        CONNECT
                      </GradientButton>
                      {blockchain.errorMsg !== "" ? (
                        <>
                          <s.SpacerSmall />
                          <s.TextDescription
                            style={{
                              textAlign: "center",
                              color: "var(--accent-text)",
                            }}
                          >
                            {blockchain.errorMsg}
                          </s.TextDescription>
                        </>
                      ) : null}
                    </s.Container>
                  ) : (
                    <>
                      <s.TextDescription
                        style={{
                          textAlign: "center",
                          color: "var(--accent-text)",
                        }}
                      >
                        {feedback}
                      </s.TextDescription>
                      <s.SpacerMedium />
                      <s.Container ai={"center"} jc={"center"} fd={"row"}>
                        <StyledRoundButton
                          style={{ lineHeight: 0.4 }}
                          disabled={claimingNft ? 1 : 0}
                          onClick={(e) => {
                            e.preventDefault();
                            decrementMintAmount();
                          }}
                        >
                          -
                        </StyledRoundButton>
                        <s.SpacerMedium />
                        <s.TextDescription
                          style={{
                            textAlign: "center",
                            color: "var(--accent-text)",
                          }}
                        >
                          {mintAmount}
                        </s.TextDescription>
                        <s.SpacerMedium />
                        <StyledRoundButton
                          disabled={claimingNft ? 1 : 0}
                          onClick={(e) => {
                            e.preventDefault();
                            incrementMintAmount();
                          }}
                        >
                          +
                        </StyledRoundButton>
                      </s.Container>
                      <s.SpacerSmall />
                      <s.Container ai={"center"} jc={"center"} fd={"row"}>
                        <GradientButton
                          disabled={tokenApproval ? 1 : (!data.checkAllowance ? 0 : 1)}
                          onClick={(e) => {
                            e.preventDefault();
                            approveFehu();
                            getData();
                          }}
                        >
                          {tokenApproval ? "BUSY" : (!data.checkAllowance ? "APPROVE SPEND" : "Press Mint NFT")}
                        </GradientButton>
                        <GradientButton
                          disabled={claimingNft ? 1 : (!data.checkAllowance ? 0 : 1)}
                          onClick={(e) => {
                            e.preventDefault();
                            claimNFTs();
                            getData();
                          }}
                        >
                          {claimingNft ? "BUSY" : (!data.checkAllowance ? "Approve Tokens First" : "Mint NFT")}
                        </GradientButton>
                      </s.Container>
                    </>
                  )}
                </>
              )}
              <s.SpacerMedium />
            </s.Container>
            <s.SpacerLarge />
            <s.Container flex={1} jc={"center"} ai={"center"}>
              <StyledImg
                alt={"example"}
                src={"./storage/images/example.gif"}
                style={{ transform: "scaleX(-1)" }}
              />
            </s.Container>
          </ResponsiveWrapper>
          <s.SpacerMedium />
          <s.Container jc={"center"} ai={"center"} style={{ width: "70%" }}>
            <s.TextDescription
              style={{
                textAlign: "center",
                color: "var(--primary-text)",
              }}
            >
              Please make sure you are connected to the right network (
              {CONFIG_MINT.NETWORK.NAME} Mainnet) and the correct address. Please note:
              Once you make the purchase, you cannot undo this action.
            </s.TextDescription>
            <s.SpacerSmall />
            <s.TextDescription
              style={{
                textAlign: "center",
                color: "var(--primary-text)",
              }}
            >
              We have set the gas limit to {CONFIG_MINT.GAS_LIMIT} for the contract to
              successfully mint your NFT. We recommend that you don't lower the
              gas limit.
            </s.TextDescription>
          </s.Container>
        </s.Container>
      </s.Screen>
    );
  }
  return (
    <s.Screen>
      <s.Container
        flex={1}
        ai={"center"}
        style={{ padding: 24, backgroundColor: "white" }}
        image={CONFIG_MINT.SHOW_BACKGROUND ? "./storage/images/background_box.png" : null}
      >
        <a href="/">
          <StyledLogo alt={"logo"} src={"./storage/images/LOGO_2.png"} />
        </a>
        <s.SpacerSmall />
        <ResponsiveWrapper flex={1} style={{ padding: 24 }} test>
          <s.Container flex={1} jc={"center"} ai={"center"}>
            <StyledImg alt={"example"} src={"./storage/images/gif_nft.gif"} />
          </s.Container>
          <s.SpacerLarge />
          <s.Container
            flex={2}
            jc={"center"}
            ai={"center"}
            style={{
              backgroundColor: "var(--accent)",
              padding: 24,
              borderRadius: 24,
              border: "4px var(--secondary)",
              boxShadow: "0px 5px 11px 2px rgba(0,0,0,0.7)",
            }}
          >
            <s.TextTitle
                style={{
                  textAlign: "center",
                  fontSize: 50,
                  fontWeight: "bold",
                  color: "var(--accent-text)",
                }}
              >
                {data.totalSupply} / {CONFIG_MINT.MAX_SUPPLY}
              </s.TextTitle>
              <s.TextDescription
                style={{
                  textAlign: "center",
                  color: "var(--primary-text)",
                }}
              >
                <StyledLink target={"_blank"} href={CONFIG_MINT.SCAN_LINK}>
                  {truncate(CONFIG_MINT.CONTRACT_ADDRESS, 15)}
                </StyledLink>
              </s.TextDescription>
              <span
                style={{
                  textAlign: "center",
                }}
              >
                <GradientButton
                  onClick={(e) => {
                    window.open("./storage/roadmap.pdf", "_blank");
                  }}
                  style={{
                    margin: "5px",
                  }}
                >
                  Roadmap
                </GradientButton>
                <GradientButton
                  style={{
                    margin: "5px",
                  }}
                  onClick={(e) => {
                    window.open(CONFIG_MINT.MARKETPLACE_LINK, "_blank");
                  }}
                >
                  {CONFIG_MINT.MARKETPLACE}
                </GradientButton>
              </span>
              <s.SpacerSmall />
              {Number(data.totalSupply) >= CONFIG_MINT.MAX_SUPPLY ? (
                <>
                  <s.TextTitle
                    style={{ textAlign: "center", color: "var(--accent-text)" }}
                  >
                    The sale has ended.
                  </s.TextTitle>
                  <s.TextDescription
                    style={{ textAlign: "center", color: "var(--accent-text)" }}
                  >
                    You can still find {CONFIG_MINT.NFT_NAME} on
                  </s.TextDescription>
                  <s.SpacerSmall />
                  <StyledLink target={"_blank"} href={CONFIG_MINT.MARKETPLACE_LINK}>
                    {CONFIG_MINT.MARKETPLACE}
                  </StyledLink>
                </>
              ) : (
                <>
                  <s.TextTitle
                    style={{ textAlign: "center", color: "var(--accent-text)" }}
                  >
                    Fehu Guardians MINT
                  </s.TextTitle>
                  <s.SpacerXSmall />
                  <s.TextDescription
                    style={{ textAlign: "center", color: "var(--accent-text)" }}
                  >
                    <p>1 {CONFIG_MINT.SYMBOL} costs {CONFIG_MINT.DISPLAY_COST}{" "} FEHU.</p>
                    <p>You can buy FehuToken on  
                      <StyledLink target={"_blank"} href={"https://app.uniswap.org/#/swap?outputCurrency=0x552a033B6Ed14b25c1B47b58a86c9A3F9fc9c87B"}>
                      &nbsp;Uniswap
                      </StyledLink>.
                    </p>
                    <p>FehuToken Address: 0x552a033B6Ed14b25c1B47b58a86c9A3F9fc9c87B</p> 
                  </s.TextDescription>
                  <s.SpacerSmall />
                  {blockchain.account === "" ||
                  (blockchain.smartContractMint === null && blockchain.smartContractToken === null ) ? (
                    <s.Container ai={"center"} jc={"center"}>
                      <s.TextDescription
                        style={{
                          textAlign: "center",
                          color: "var(--accent-text)",
                        }}
                      >
                        Connect to the {CONFIG_MINT.NETWORK.NAME} network
                      </s.TextDescription>
                      <s.SpacerSmall />
                      <GradientButton
                        onClick={(e) => {
                          e.preventDefault();
                          dispatch(connect());
                          getData();
                        }}
                      >
                        CONNECT
                      </GradientButton>
                      {blockchain.errorMsg !== "" ? (
                        <>
                          <s.SpacerSmall />
                          <s.TextDescription
                            style={{
                              textAlign: "center",
                              color: "var(--accent-text)",
                            }}
                          >
                            {blockchain.errorMsg}
                          </s.TextDescription>
                        </>
                      ) : null}
                    </s.Container>
                  ) : (
                    <>
                      <s.TextDescription
                        style={{
                          textAlign: "center",
                          color: "var(--accent-text)",
                        }}
                      >
                        {feedback}
                      </s.TextDescription>
                      <s.SpacerMedium />
                      <s.Container ai={"center"} jc={"center"} fd={"row"}>
                        <StyledRoundButton
                          style={{ lineHeight: 0.4 }}
                          disabled={claimingNft ? 1 : 0}
                          onClick={(e) => {
                            e.preventDefault();
                            decrementMintAmount();
                          }}
                        >
                          -
                        </StyledRoundButton>
                        <s.SpacerMedium />
                        <s.TextDescription
                          style={{
                            textAlign: "center",
                            color: "var(--accent-text)",
                          }}
                        >
                          {mintAmount}
                        </s.TextDescription>
                        <s.SpacerMedium />
                        <StyledRoundButton
                          disabled={claimingNft ? 1 : 0}
                          onClick={(e) => {
                            e.preventDefault();
                            incrementMintAmount();
                          }}
                        >
                          +
                        </StyledRoundButton>
                      </s.Container>
                      <s.SpacerSmall />
                      <s.Container ai={"center"} jc={"center"} fd={"row"}>
                        <GradientButton
                          disabled={tokenApproval ? 1 : (!data.checkAllowance ? 0 : 1)}
                          onClick={(e) => {
                            e.preventDefault();
                            approveFehu();
                            getData();
                          }}
                        >
                          {tokenApproval ? "BUSY" : (!data.checkAllowance ? "APPROVE SPEND" : "Press Mint NFT")}
                        </GradientButton>
                        <GradientButton
                          disabled={claimingNft ? 1 : (!data.checkAllowance ? 1 : 0)}
                          onClick={(e) => {
                            e.preventDefault();
                            claimNFTs();
                            getData();
                          }}
                        >
                          {claimingNft ? "BUSY" : (!data.checkAllowance ? "Approve Tokens First" : "Mint NFT")}
                        </GradientButton>
                      </s.Container>
                    </>
                  )}
                </>
              )}
              <s.SpacerMedium />

          </s.Container>
          <s.SpacerLarge />
          <s.Container flex={1} jc={"center"} ai={"center"}>
            <StyledImg
              alt={"example"}
              src={"./storage/images/gif_nft.gif"}
              style={{ transform: "scaleX(-1)" }}
            />
          </s.Container>
        </ResponsiveWrapper>
        <s.SpacerMedium />
      </s.Container>
    </s.Screen>
  );
}

export default App;
