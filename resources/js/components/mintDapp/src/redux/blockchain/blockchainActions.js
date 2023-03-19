// constants
import Web3EthContract from "web3-eth-contract";
import Web3 from "web3";
// log
import { fetchData } from "../data/dataActions";

const connectRequest = () => {
  return {
    type: "CONNECTION_REQUEST",
  };
};

const connectSuccess = (payload) => {
  return {
    type: "CONNECTION_SUCCESS",
    payload: payload,
  };
};

const connectFailed = (payload) => {
  return {
    type: "CONNECTION_FAILED",
    payload: payload,
  };
};

const updateAccountRequest = (payload) => {
  return {
    type: "UPDATE_ACCOUNT",
    payload: payload,
  };
};

export const connect = () => {
  return async (dispatch) => {
    dispatch(connectRequest());
    const abiResponseMint = await fetch("./js/mintDapp/config/settings/abi_mint.json", {
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
    });
    const abiMint = await abiResponseMint.json();
    const configResponseMint = await fetch("./js/mintDapp/config/settings/config_mint.json", {
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
    });
    const abiResponseToken = await fetch("./js/mintDapp/config/settings/abi_token.json", {
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
    });
    const abiToken = await abiResponseToken.json();
    const configResponseToken = await fetch("./js/mintDapp/config/settings/config_token.json", {
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
    });
    const CONFIG_MINT = await configResponseMint.json();
    const CONFIG_TOKEN = await configResponseToken.json();
    const { ethereum } = window;
    const metamaskIsInstalled = ethereum && ethereum.isMetaMask;
    if (metamaskIsInstalled) {
      Web3EthContract.setProvider(ethereum);
      let web3 = new Web3(ethereum);
      try {
        
        const accounts = await ethereum.request({
          method: "eth_requestAccounts",
        });
        
        const networkId = await ethereum.request({
          method: "net_version",
        });
        if (networkId == CONFIG_MINT.NETWORK.ID && networkId == CONFIG_TOKEN.NETWORK.ID) {
          const SmartContractMint = new Web3EthContract(
            abiMint,
            CONFIG_MINT.CONTRACT_ADDRESS
          );
          const SmartContractToken = new Web3EthContract(
            abiToken,
            CONFIG_TOKEN.CONTRACT_ADDRESS
          );
          dispatch(
            connectSuccess({
              account: accounts[0],
              smartContractToken: SmartContractToken,
              smartContractMint: SmartContractMint,
              web3: web3,
            })
          );
          // Add listeners start
          ethereum.on("accountsChanged", (accounts) => {
            dispatch(updateAccount(accounts[0]));
          });
          ethereum.on("chainChanged", () => {
            window.location.reload();
          });
          // Add listeners end
        } else {
          dispatch(connectFailed(`Change network to ${CONFIG.NETWORK.NAME}.`));
        }
      } catch (err) {
        dispatch(connectFailed("Something went wrong."));
      }
    } else {
      dispatch(connectFailed("Install Metamask."));
    }
  };
};

export const updateAccount = (account) => {
  return async (dispatch) => {
    dispatch(updateAccountRequest({ account: account }));
    dispatch(fetchData(account));
  };
};
